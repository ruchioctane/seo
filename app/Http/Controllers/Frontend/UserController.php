<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use App\Repositories\Frontend\Pages\PagesRepository;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Frontend\Users;
use App\Models\Frontend\Investor;
use App\Models\Frontend\InvestorUser; 
use App\Models\Frontend\StartupCompany;
use App\Models\Frontend\FundingRound;
use App\Models\Frontend\startupUser;
use App\Models\Frontend\StartupRoleInvestor; 
use App\Models\Frontend\RoleUser;
use App\Models\StartupCategorySubcategoryMapping;
use App\Models\Frontend\Profile;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use Image;
use File;
use DB;

 /**
 * Class FrontendController.
 */
class UserController extends Controller{
    /**
     * @return \Illuminate\View\View
     */

    // 1 | Administrator
    // 2 | Investor
    // 3 | Startup
    // 4 | Advisor
    // 5 | Co founder
    // 6 | Partner
    // 7 | Member

    const SECTOR_CATEGORY = 1;
    const TECHNOLOGY_CATEGORY = 2;
    const BUSINNESS_GOAL = 3;
    const ACTIVE = 1;
//
    /**
     * UserController constructor.
     *
     * @param UserRepository $user
     */
    public function __construct()
    {
        $this->startupCategorySubcategoryMapping = new StartupCategorySubcategoryMapping();
    }

    public function index(){  

           $country_list = DB::table("country")->get();

            $postData = array(
              'countries_list'=>isset($country_list) ? $country_list :""
            );    

           return view('frontend.pages.register',$postData);
    }


    /*function for registering new user*/
    public function saveUser(Request $request){

        $post = $request->all();
          $validator = Validator::make($request->all(), [
              'first_name' => 'required',
              'last_name' => 'required',
              'email' => 'required|email|unique:users',
              'password' => 'required_with:password_confirmation|same:password_confirmation|min:8',
              'password_confirmation'=>'min:8',
              'role_id'  => 'required'

          ]);

            $this->validate(
                $request, 
                ['role_id' => 'required'],
                ['role_id.required' => 'Please select role']
            );
          if ($validator->fails()){
              return redirect('new-user')->withErrors($validator)->withInput();
          }

            $postData = array(
               'first_name' => isset($post['first_name']) ?$post['first_name']:"",
               'last_name'  => isset($post['last_name']) ? $post['last_name'] :"",
               'email'      => isset($post['email']) ? $post['email'] :"", 
               'country'    => isset($post['country']) ? $post['country']:"",
               'password'   => isset($post['password']) ?bcrypt($post['password']) :""
            );

            $SaveUser = Users::saveUser($postData);

            $role_user = array(
                'user_id'=> isset($SaveUser->id)  ? $SaveUser->id:"",
                'role_id' => isset($post['role_id']) ? $post['role_id']:""
            );

           $SaveUserRole = RoleUser::saveRole($role_user);

           //echo "<pre>";print_r($SaveUserRole['role_id']);exit();
          
           $email =  isset($post['email']) ? $post['email'] :"";
           $password = isset($post['password']) ? $post['password']:"";

          if(Auth::attempt(['email' => $email, 'password' => $password])) {
            if($SaveUserRole['role_id'] ==3){
            return redirect('/startupcompany');
            }elseif($SaveUserRole['role_id'] == 2){
              return redirect('/investor');
            }elseif($SaveUserRole['role_id'] == 4){
            return redirect('/advisor');
          }else{

          }
        }
          

    }
    /*@end of function*/ 

    public function investor_view(){

       $user_id = Auth::user()->id; 
       $getInvestUser = InvestorUser::getfirmidByUserId($user_id);

       $id = isset($getInvestUser->firm_id) ? $getInvestUser->firm_id :"";
       $investor_details = Investor::getInvestorsDetail($id);

       $postData = array(
          'investor_details'=>(isset($investor_details) && !empty($investor_details)) ? $investor_details:"",
          'active_tab'=>'accred'
        );

       //return view('frontend.pages.investor',$postData);
       return view('frontend.pages.step1',$postData);
    }

    public function saveAccreditation(Request $request){

        $postData = $request->all(); 

         $validator = Validator::make($request->all(), [
            'investor_type' => 'required',
            'firm_name' => 'required',
            'country_id' => 'required',
            'firm_accredition' => 'required',

        ]);

          if ($validator->fails()) {
              //return redirect('investor')->withErrors($validator)->withInput();
              return redirect('step1')->withErrors($validator)->withInput();
          }

          $user_id = Auth::user()->id;

         $saveData = array(
          'investor_type'=> isset($postData['investor_type']) ?$postData['investor_type']:"",
          'firm_name'=>    isset($postData['firm_name']) ?$postData['firm_name']:"",
          'country_id'=>   isset($postData['country_id']) ?$postData['country_id']:"", 
          'firm_accredition'=>isset($postData['firm_accredition']) ?$postData['firm_accredition']:"", 
         ); 

        $saveAccred = Investor::saveAccreditation($saveData,$postData['firm_name']); 

        $getParentFirmUser  = InvestorUser::getParentUser($saveAccred->id); 
          if(isset($getParentFirmUser) && !empty($getParentFirmUser)){
            $parent_id = $getParentFirmUser->user_id;
          }else{
            $parent_id = 0;
        }

        $investor_users = array(
          'user_id' => isset($user_id)? $user_id :"",
          'firm_id' => isset($saveAccred->id) ? $saveAccred->id :"",
          'parent_id'=>$parent_id
        );

        $saveInvestorUser = InvestorUser::saveInvestorUsers($investor_users);

        if($saveAccred){
             return redirect('/experience');
        }else{
             return Redirect::back()->with('error', 'Some error has accured');
        }

    }

    public function experience(){
      /// $postData = [];

       $user_id = Auth::user()->id; 
       $getInvestUser = InvestorUser::getfirmidByUserId($user_id);

       $id = isset($getInvestUser->firm_id) ? $getInvestUser->firm_id :"";
       $investor_details = Investor::getInvestorsDetail($id);
       //print_r($investor_details);
       $postData = array(
          'investor_details'=>(isset($investor_details) && !empty($investor_details)) ? $investor_details:"",
        );

        return view('frontend.pages.step2',$postData);
    }


    public function saveExperience(Request $request){

        $postData = $request->all(); 

        $validator = Validator::make($request->all(), [
          'direct_startup' => 'required',
          'previous_start_com' => 'required',
        ]);

        if ($validator->fails()) {
            //return redirect('investor')->withErrors($validator)->withInput();
            return redirect('experience')->withErrors($validator)->withInput();
          }

        $saveData = array(
          'direct_startup' =>  isset($postData['direct_startup']) ? $postData['direct_startup']:"",
          'previous_start_com'=> isset($postData['previous_start_com']) ? $postData['previous_start_com']:"",
          'previous_invest_type'=> isset($postData['previous_invest_type']) ? json_encode($postData['previous_invest_type'] ):"",
          'startup_help_method'=> isset($postData['startup_help_method']) ? json_encode($postData['startup_help_method']):"",
        );

       $user_id = Auth::user()->id;

        $getInvestUser = InvestorUser::getfirmidByUserId($user_id);

       $id = isset($getInvestUser->firm_id) ? $getInvestUser->firm_id :"";
       $saveExperience = Investor::saveAccreditation($saveData,$id); 


         if($saveExperience){
             return redirect('/details');
        }else{
             return Redirect::back()->with('error', 'Some error has accured');
        }

    }


    public function details(){
        // $postData = array(
        //   'active_tab'=>'detailsasd'
        // );
        ///$postData = [];
       $user_id = Auth::user()->id; 
       $getInvestUser = InvestorUser::getfirmidByUserId($user_id);

       $id = isset($getInvestUser->firm_id) ? $getInvestUser->firm_id :"";
       $investor_details = Investor::getInvestorsDetail($id);
//print_r($investor_details);
       $postData = array(
          'investor_details'=>(isset($investor_details) && !empty($investor_details)) ? $investor_details:"",
        );
        //return view('frontend.pages.investor',$postData);
        return view('frontend.pages.step3',$postData);
    }


    public function saveDetails(Request $request){

         $postData = $request->all(); 

        $validator = Validator::make($request->all(), [
          'invest_budget' => 'required',
          'website_url' => 'required',
          'bio'    => 'required',
        ]);

        if ($validator->fails()) {
            //return redirect('investor')->withErrors($validator)->withInput();
            return redirect('details')->withErrors($validator)->withInput();
        }

        $saveData = array(
          'invest_budget'=>  isset($postData['invest_budget']) ? $postData['invest_budget']:"",
          'round_preferences'=>  isset($postData['round_preferences']) ? $postData['round_preferences']:"",
          'ticket_sizes'=>  isset($postData['ticket_sizes']) ? $postData['ticket_sizes']:"",
          'round_sizes'=>  isset($postData['round_sizes']) ? $postData['round_sizes']:"",
          'invest_per_year'=>  isset($postData['invest_per_year']) ? $postData['invest_per_year']:"",
          'preferences_selection'=>  isset($postData['preferences_selection']) ? $postData['preferences_selection']:"",
          'linkedn_url'  =>  isset($postData['linkedn_url']) ? $postData['linkedn_url']:"",
          'website_url'  =>  isset($postData['website_url']) ? $postData['website_url']:"",
          'bio'          =>  isset($postData['bio']) ? $postData['bio']:"",
          'website_url'  =>  isset($postData['website_url']) ? $postData['website_url']:"",
        );

       $user_id = Auth::user()->id;
       $getInvestUser = InvestorUser::getfirmidByUserId($user_id);

       $id = isset($getInvestUser->firm_id) ? $getInvestUser->firm_id :"";
       //$saveDetails = Investor::saveAccreditation($saveData,$user_id); 
       $saveDetails = Investor::saveAccreditation($saveData,$id); 
         if($saveDetails){
          $request->session()->flash('success', 'User was successful added!');
           return redirect('/details');
        }else{
             return Redirect::back()->with('error', 'Some error has accured');
        }


    }

    public function startup_view(){
       $data = array(
          'step'=>1
       );

      $user_id = Auth::user()->id;
      $companyInfo =  StartupCompany::getCompanyInfoByuserId($user_id);
      $AllStartupDetails  = StartupCompany::getAllStartupDetails();
        $country_list = DB::table("country")->get();
      $data['startupDetail'] = $AllStartupDetails;
      $data['countries_list'] = $country_list;

      $data['company_detail'] = $companyInfo; 
      return view('frontend.pages.startup_registration',$data);
    }

    public function startup_activity(){
        
      $data = array(
        'step'=>2
      );  

      $user_id = Auth::user()->id;
      $companyInfo =  StartupCompany::getCompanyInfoByuserId($user_id);
      $data['company_detail'] = $companyInfo; 
        $market_sector =DB::table("market_sector")->where(['status'=>1,'is_deleted'=>0])->get();
      $technology =DB::table("technology")->where(['status'=>1,'is_deleted'=>0])->get();
      $startup_business_goal =DB::table("startup_business_goal")->where(['is_deleted'=>0])->get();

      $data['sector'] = $market_sector;
      $data['technologies'] = $technology;
      $data['businessGoal'] = $startup_business_goal;
      return view('frontend.pages.startup_registration',$data);
    }

    public function startup_fundraising(){
      $data = array(
        'step'=>3
      );          
      $user_id = Auth::user()->id;
      $companyInfo =  StartupCompany::getCompanyInfoByuserId($user_id);
      $round_type =DB::table("round_type")->where(['is_deleted'=>0])->get();
      $data['company_detail'] = $companyInfo;
      $data['round_type'] = $round_type;

      return view('frontend.pages.startup_registration',$data);
    }


    public function saveCompanyInfo(Request $request){
        
        $postData = $request->all(); 
        $user_id = Auth::user()->id;
        
        
        if(isset($postData['sub_role']) && !empty($postData['sub_role']) ){

            $data =  array(
              'role_id'  => isset($postData['sub_role']) ? $postData['sub_role']:"",
              'user_id'  => isset($user_id)  ? $user_id:""
            );  
            $map_role = RoleUser::saveRole($data);
             return redirect('/startup_profile');
        }
        /* for saving step 1 details*/ 
        if(isset($postData['company_detail_submit']) ) {

            $validator = Validator::make($request->all(), [
                'company_name' => 'required',
                'company_website' => 'required',
                'location' => 'required',
                'country'  => 'required',
                'mobile'   => 'required'
            ]);
            

              $saveData = array(
                'company_name'=> isset($postData['company_name']) ?$postData['company_name']:"",
                'company_website'=>  isset($postData['company_website']) ?$postData['company_website']:"",
                'location'=>    isset($postData['location']) ?$postData['location']:"", 
                'country' =>    isset($postData['country']) ?$postData['country']:"",
                'mobile'  =>    isset($postData['mobile']) ?$postData['mobile']:"",    
                'user_id'=> isset($user_id)? $user_id :"",
                'status'=>0 
             ); 
              if ($validator->fails()) {
                  return redirect('startupcompany')->withErrors($validator)->withInput();
              }
               
               $savedata = StartupCompany::saveCompanyInfo($saveData,"");

               $startup_users = array(
                'user_id' => isset($user_id)? $user_id :"",
                'firm_id' => isset($savedata->id) ? $savedata->id :"",
                'parent_id'=>0
               );
       
              $startupuser = startupUser::saveStartupuser($startup_users);
              return redirect('/startupactivity');
         }  
         /*@end*/ 

           /* for saving step 2 details*/ 
           if(isset($postData['submit_activity']) ) {


            $validator = Validator::make($request->all(), [
                'markets' => 'required',
                'technology' => 'required',
                'business_goal' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect('startupactivity')->withErrors($validator)->withInput();
            }
            $user_id = Auth::user()->id;
            $companyInfo =  StartupCompany::getCompanyInfoByuserId($user_id);
            
            $id = isset($companyInfo->id) ? $companyInfo->id :"";

            $startupCategorySubcategoryMapping = [];
            foreach($postData['markets'] as $m) {
              $c = [];
              $c['companyid'] = (int) $id;
              $c['categoryid'] = (int) self::SECTOR_CATEGORY; // Sector
              $c['subcategoryid'] = (int) $m;
              $c['status'] = (int) self::ACTIVE; // Active
              array_push($startupCategorySubcategoryMapping, $c);
            }
            foreach($postData['technology'] as $m) {
              $c = [];
              $c['companyid'] = (int) $id;
              $c['categoryid'] = (int) self::TECHNOLOGY_CATEGORY; // Technology
              $c['subcategoryid'] = (int) $m;
              $c['status'] = (int) self::ACTIVE; // Active
              array_push($startupCategorySubcategoryMapping, $c);
            }
            foreach($postData['business_goal'] as $m) {
              $c = [];
              $c['companyid'] = (int) $id;
              $c['categoryid'] = (int) self::BUSINNESS_GOAL; // Business Goal
              $c['subcategoryid'] = (int) $m;
              $c['status'] = (int) self::ACTIVE; // Active
              array_push($startupCategorySubcategoryMapping, $c);
            }
            $this->startupCategorySubcategoryMapping->updateStatus($id);
            $this->startupCategorySubcategoryMapping->insertOrUpdate($startupCategorySubcategoryMapping);


              $saveData  =  array(
                'markets' => isset($postData['markets']) ? json_encode($postData['markets']) :"",
                'technology'=> isset($postData['technology']) ? json_encode($postData['technology']):"",
                'business_goal'=> isset($postData['business_goal']) ? json_encode($postData['business_goal']) :"" 
              );



              $savedata = StartupCompany::saveCompanyInfo($saveData,$id);

              return redirect('/startupfundraising');
            
           }

        /*@end*/ 

        /*@function for storing fundraising*/
          if(isset($postData['submit_fundraising'] ) ){


            $validator = Validator::make($request->all(), [
                'round_type' => 'required',
                'amount' => 'required',
                'closing_date' => 'required',
                'deck_url' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect('startupfundraising')->withErrors($validator)->withInput();
            }

               $saveData  =  array(
                'round_type' => isset($postData['round_type']) ? $postData['round_type'] :"",
                'amount'=> isset($postData['amount']) ? $postData['amount']:"",
                'closing_date'=> isset($postData['closing_date']) ? $postData['closing_date'] :"" ,
                'deck_url'=> isset($postData['deck_url']) ? $postData['deck_url'] :"" 
              );

              $user_id = Auth::user()->id;
              $companyInfo =  StartupCompany::getCompanyInfoByuserId($user_id);
              
              $id = isset($companyInfo->id) ? $companyInfo->id :"";

              $savedata = StartupCompany::saveCompanyInfo($saveData,$id);

              return redirect('/feedActivity');
            

          }

        /*@end of function*/ 

        if($savedata){
              return redirect('/startup_profile');
          }else{
            return redirect('/fundraising');
          }
     }

   public function fundraising_view(){
      
      $user_id = Auth::user()->id;
      $companyInfo =  StartupCompany::getCompanyInfoByuserId($user_id);  
      $startup_id = isset($companyInfo->id) ? $companyInfo->id:"";
      $funding_details = FundingRound::getFundingRound($startup_id);
      $getAllInvestorsList = Users::getAllInvestorsList();
      
      $startupRoleInvest = StartupRoleInvestor::getStartupRoleInvestorByid($startup_id);

      foreach($getAllInvestorsList as $invest){
        $first_name = isset($invest->first_name) ? $invest->first_name :""; 
        $last_name =  isset($invest->last_name) ? $invest->last_name :"";
        $investors[] = $first_name." ".$last_name;
      }

      $result['funding_details'] =  isset($funding_details) ? $funding_details :"";
      $result['getAllInvestorsList'] =  isset($investors) ? $investors :"";
      $result['startup_role']  = isset($startupRoleInvest) ? $startupRoleInvest :"";
      
      return view('frontend.pages.fundraising',$result);

   }

  public function loginUser(Request $request){
      $post = $request->all();

      $email =  isset($post['email']) ? $post['email'] : "";
      $userData = Users::getUserData($email);
      $password = isset($post['password']) ? $post['password'] :"";
      if(isset($userData) && !empty($userData)){

     if (Auth::attempt(['email' => $email, 'password' => $password])){

      if($userData->is_admin == 1){
          return redirect('/admin/dashboard');
          }
      else{
          return redirect('/feedActivity');
      }
     } else {
      return Redirect::back()->with('error', 'Invalid Email id / password.');
     }
     }else{

      return Redirect::back()->with('error', 'Invalid Email id / password.');
     }

  }


    public function onboard(){

       return view('frontend.pages.onboard');
    }

   public function feedActivity(){

    $userDetail = Auth::user();
    $postData= array(
     'user_details'=>$userDetail    
    );    
     return view('frontend.pages.feed_activity',$postData);
   }  

   public function getMarketList() {
      $market_sector =DB::table("market_sector")->where(['status'=>1,'is_deleted'=>0])->get();
      $cData = [];
      $AllMarkets = [];
      foreach($market_sector as $market) {

        $count = DB::table("startup_category_subcategory_mapping")->where([
          'status'=>1,
          'categoryid'=>1,
          'subcategoryid'=>$market->id
        ])->count();
        $d = [];
        $d['market_id'] = $market->id;
        $d['name'] = $market->name;
        $d['count'] = $count;
        $d['status'] = $market->status;
        array_push($AllMarkets, $d);
      }

      return $AllMarkets;
   }

   public function getTechologyList() {

      $technology =DB::table("technology")->where(['status'=>1,'is_deleted'=>0])->get();
      $cData = [];
      $AllTech = [];
      foreach($technology as $tech) {
        $count = DB::table("startup_category_subcategory_mapping")->where([
          'status'=>1,
          'categoryid'=>2,
          'subcategoryid'=>$tech->id
        ])->count();
        $d = [];
        $d['technology_id'] = $tech->id;
        $d['name'] = $tech->name;
        $d['count'] = $count;
        $d['status'] = $tech->status;
        array_push($AllTech, $d);
      }

      return $AllTech;
   }

   public function getBussinessGoalsList() {

      $startup_business_goal =DB::table("startup_business_goal")->where(['is_deleted'=>0])->get();
      $cData = [];
      $AllGoals = [];
      foreach($startup_business_goal as $bGoal) {
        $count = DB::table("startup_category_subcategory_mapping")->where([
          'status'=>1,
          'categoryid'=>3,
          'subcategoryid'=>$bGoal->id
        ])->count();
        $d = [];
        $d['business_goal_id'] = $bGoal->id;
        $d['name'] = $bGoal->name;
        $d['count'] = $count;
        $d['status'] = $bGoal->status;
        array_push($AllGoals, $d);
      }

      return $AllGoals;
   }

   public function startupfilter($a,$b,$c,$d) {

      $col = 'company_name';
      $order = 'desc';
      if(in_array($d, [0,1])) {
        $order = 'asc';
      }

      DB::enableQueryLog();
      if((($a[0] == 0) && (sizeof($a) == 1)) && (($b[0] == 0) && (sizeof($b) == 1)) && (($c[0] == 0) && (sizeof($c) == 1))) {
        $companies = DB::table('startup_companyinfo')->select('startup_companyinfo.id','startup_companyinfo.company_name','startup_companyinfo.company_website','startup_companyinfo.location','startup_companyinfo.number_of_employees','startup_companyinfo.markets','startup_companyinfo.technology','startup_companyinfo.business_goal','startup_companyinfo.round_type','startup_companyinfo.amount','startup_companyinfo.closing_date','startup_companyinfo.deck_url','startup_companyinfo.high_concept_pitch','startup_companyinfo.product','startup_companyinfo.logo','startup_companyinfo.investing','startup_companyinfo.meeting_investors','startup_companyinfo.country','startup_companyinfo.mobile','startup_companyinfo.created_by','startup_companyinfo.created_at','startup_companyinfo.updated_at','startup_companyinfo.status','startup_companyinfo.user_id','startup_companyinfo.is_deleted')
        ->join('startup_category_subcategory_mapping', 'startup_companyinfo.id', '=', 'startup_category_subcategory_mapping.companyid')
        ->where('startup_category_subcategory_mapping.status', 1)
        ->groupBy('companyid')
        ->orderBy($col,$order)
        ->paginate(2);
      } else {
        $companies = DB::table('startup_companyinfo')->select('startup_companyinfo.id','startup_companyinfo.company_name','startup_companyinfo.company_website','startup_companyinfo.location','startup_companyinfo.number_of_employees','startup_companyinfo.markets','startup_companyinfo.technology','startup_companyinfo.business_goal','startup_companyinfo.round_type','startup_companyinfo.amount','startup_companyinfo.closing_date','startup_companyinfo.deck_url','startup_companyinfo.high_concept_pitch','startup_companyinfo.product','startup_companyinfo.logo','startup_companyinfo.investing','startup_companyinfo.meeting_investors','startup_companyinfo.country','startup_companyinfo.mobile','startup_companyinfo.created_by','startup_companyinfo.created_at','startup_companyinfo.updated_at','startup_companyinfo.status','startup_companyinfo.user_id','startup_companyinfo.is_deleted')
        ->join('startup_category_subcategory_mapping', 'startup_companyinfo.id', '=', 'startup_category_subcategory_mapping.companyid')
        ->where('startup_category_subcategory_mapping.status', 1)
        ->where('startup_category_subcategory_mapping.categoryid', 1)
        ->whereIn('startup_category_subcategory_mapping.subcategoryid', explode(",",$a))
        ->orWhere('startup_category_subcategory_mapping.categoryid', 2)
        ->WhereIn('startup_category_subcategory_mapping.subcategoryid', explode(",",$b))
        ->orWhere('startup_category_subcategory_mapping.categoryid', 3)
        ->WhereIn('startup_category_subcategory_mapping.subcategoryid', explode(",",$c))
        ->groupBy('companyid')
        ->orderBy($col,$order)
        ->paginate(2);
      }

      $data = [
        'market_sector' => $this->getMarketList(),
        'technology' => $this->getTechologyList(),
        'startup_business_goal' => $this->getBussinessGoalsList(),
      ];

      $cData = [];
      foreach($companies as $company) {
        $c= [];
        $c['id'] =$company->id; 
        $c['company_name'] =$company->company_name; 
        $c['company_website'] =$company->company_website; 
        $c['location'] =$company->location; 
        $c['amount'] =$company->amount; 
        //$c['closing_date'] = $company->closing_date; 
        $c['closing_date'] = \Carbon\Carbon::parse($company->closing_date)->format('d/m/Y');
        $c['round_type'] = $company->round_type; 
        $c['round_type_text'] = "Not Available"; 
        $c['deck_url'] = $company->deck_url; 
        $c['status'] = $company->status; 
        $c['user_id'] = $company->user_id; 


        $round_type =DB::table("round_type")->where(['id'=>$company->round_type])->get();
        if(isset($round_type[0])) {
          $c['round_type_text'] = $round_type[0]->name;
        }
        array_push($cData, (object) $c);
      }
    return view('frontend.pages.startup', ['data' => $data, 'startups' => $companies, 'startups_data' => $cData]);

   }

   public function startup(){



      $companies = DB::table('startup_companyinfo')->paginate(2);



      $data = [
        'market_sector' => $this->getMarketList(),
        'technology' => $this->getTechologyList(),
        'startup_business_goal' => $this->getBussinessGoalsList(),
      ];

      $cData = [];
      foreach($companies as $company) {
        $c= [];
        $c['id'] =$company->id; 
        $c['company_name'] =$company->company_name; 
        $c['company_website'] =$company->company_website; 
        $c['location'] =$company->location; 
        $c['amount'] =$company->amount; 
        //$c['closing_date'] = $company->closing_date; 
        $c['closing_date'] = \Carbon\Carbon::parse($company->closing_date)->format('d/m/Y');
        $c['round_type'] = $company->round_type; 
        $c['round_type_text'] = "Not Available"; 
        $c['deck_url'] = $company->deck_url; 
        $c['status'] = $company->status; 
        $c['user_id'] = $company->user_id; 


        $round_type =DB::table("round_type")->where(['id'=>$company->round_type])->get();
        if(isset($round_type[0])) {
          $c['round_type_text'] = $round_type[0]->name;
        }
        array_push($cData, (object) $c);
      }

      return view('frontend.pages.startup', ['data' => $data, 'startups' => $companies, 'startups_data' => $cData]);

   }

   public function startup_profile(){

      $user_id = Auth::user()->id;
      $companyInfo =  StartupCompany::getCompanyInfoByuserId($user_id);
      $userDetails = Auth::user();
      $postData =  array(
        'user_data'=>isset($userDetails) ? $userDetails :"",
        'companyInfo' =>isset($companyInfo) ? $companyInfo :"", 
      );
     return view('frontend.pages.fundraising',$postData);
   }


   public function profile_setting(){

   $country_list = DB::table("country")->get();
   $user_data = Users::getLoggedInUserData();
   
   $user_id = isset($user_data->id) ? $user_data->id:"";
 //  DB::enableQueryLog();
   $profileData = Profile::getUserProfileData($user_id);

   $postData = array(
    'countries_list'=>isset($country_list) ? $country_list :"",
    'user_data'=> isset($user_data) ? $user_data :"",
    'profile_info'=> isset($profileData) ? $profileData :""
   );   

     return view('frontend.pages.profile_setting_startup',$postData);
   }


   public function saveProfileData(Request $request){

      $post = $request->all();
  
      $userId = Auth::user()->id;
      $validator = Validator::make($request->all(), [
          'first_name' => 'required',
          'email' => 'required'
      ]);

      if ($validator->fails()) {
             $response = array(
                        'status' => 0,
                        'msg' => 'Something went Wrong.',
                        'domain' =>"",
                        //'banner_image'=> $post,
                );

             return \Response::json($response);   
      }else{
              
          $current_password = isset($post['current_password']) ? $post['current_password']:"";
          $confirm_password = isset($post['confirm_password']) ? $post['confirm_password']:"";

          $saveBasicInfo = array(
            'first_name' => isset($post['first_name']) ? $post['first_name'] :"",
            'last_name' =>  isset($post['last_name'])  ? $post['last_name'] :"",
            'email'     =>  isset($post['email'])  ?  $post['email']:"", 
            'country'   =>  isset($post['country'])  ? $post['country']:""
          );

          $SaveUser = Users::saveUser($saveBasicInfo,$userId);  
         
          $saveProfileData =array(
            'education' =>isset($post['education'])  ? $post['education']:"",
            'bio'       =>isset($post['bio'])  ?  $post['bio']:""
          );

          $SaveUserProfile = Profile::saveProfile($saveProfileData,$userId);  

      }   
        $response = array(
                'status' => 1,
                'msg' => 'Profile Updated successfully.',
                'domain' =>"",
        );

       return \Response::json($response);   

    }


    public function saveProfileImage(Request $request){

         $post = $request->all();
         $userId = Auth::user()->id;
        if(isset($post['image']) && !empty($post['image'])){
      
           $profileImageUrl = $this->upload_logo($post['image'],2);

        }
        $saveProfileData =array(
          'image' =>isset($profileImageUrl)  ? $profileImageUrl:"",
          'user_id'       =>isset($userId)  ?  $userId:""
        );

        $SaveUserProfile = Profile::saveProfile($saveProfileData,$userId);
        $response = array(
              'status' => 1,
              'msg' => 'Profile Image Uploaded successfully.',
              'domain' =>"",
        );

       return \Response::json($response);  

    }



    /*@function for updating the profile image */ 
      
        public function upload_logo($photo, $role_id){

          $imagename = time().'.'.$photo->getClientOriginalName(); 
          $folder='/users/'.$role_id.'/logo';
          $thumb_folder=$folder.'/thumb';
          
          File::makeDirectory(public_path($folder),0777, true, true);
          File::makeDirectory(public_path($thumb_folder),0777, true, true);

          $thumb_destinationPath = public_path($thumb_folder);
     
          $thumb_img = Image::make($photo->getRealPath());
            
          $thumb_img->save($thumb_destinationPath.'/'.$imagename,80);
          $destinationPath = public_path($folder);
          $file_url=$thumb_folder."/".$imagename;

          $photo->move($destinationPath, $imagename);
          return $file_url;
                    
      }
   /*@end of function */ 


   /*function for updating the my interest  information */ 
     public function myInterest(){
  
      $userId = Auth::user()->id;

      $companyInfo =  StartupCompany::getCompanyInfoByuserId($userId);

      $selected_sector = (isset($companyInfo) && !empty($companyInfo) ) ?   json_decode($companyInfo->markets) :"";
      $selected_technology = (isset($companyInfo) &&  !empty($companyInfo) ) ?  json_decode($companyInfo->technology) :"";
      $selected_business_goal = (isset($companyInfo) && !empty($companyInfo)) ?  json_decode($companyInfo->business_goal):"";

      $sectors = DB::table("market_sector")->where(['status'=>1,'is_deleted'=>0])->get();
      $technology = DB::table("technology")->where(['status'=>1,'is_deleted'=>0])->get();
      $business_goal = DB::table("startup_business_goal")->where(['is_deleted'=>0])->get();
      $postData = array(
        'sectors'=> isset($sectors) ? $sectors :"",
        'technology'=> isset($technology) ? $technology :"",
        'business_goal'=> isset($business_goal) ? $business_goal :"",
        'selected_sector'=> isset($selected_sector) ? $selected_sector:"",
        'selected_technology'=> isset($selected_technology) ? $selected_technology:"",
        'selected_goal'=> isset($selected_business_goal) ? $selected_business_goal :""
      ); 

      return view('frontend.pages.my-interest',$postData);
     }


     public function saveMyInterestOptions(Request $request){

        $postData = $request->all();

        echo '<pre>';
        print_r($postData);  die;
        
     }

    public function account_setting(){

      return view('frontend.pages.account_setting');
    }


    public function changePassword(Request $request){

         $post = $request->all();
         $userId = Auth::user()->id;

         $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required_with:password_confirmation|same:password_confirmation|min:8',
            'password_confirmation'=>'min:8',

        ]);
          $userDetail = Auth::user();
          if ($validator->fails()){
              $response = array(
                    'status' => 0,
                    'msg' => 'Something went wrong',
                    'domain' =>"",
              );


           return \Response::json($response);  

          }elseif($userDetail->email!=$post['email']){

               $response = array(
                    'status' => 0,
                    'msg' => 'Something went wrong',
                    'domain' =>"",
                  );
                 return \Response::json($response);  
           }else{
              $id = Auth::user()->id;
              $updateArr = array(
                'password'=>isset($post['password']) ? $post['password']:""
              );
              $updatePassword = Users::saveUser($updateArr,$id);

                $response = array(
                    'status' => 1,
                    'msg' => 'Password updated successfully.',
                    'domain' =>"",
                  );
                 return \Response::json($response);  
          }
      } 
     


      /*function for saving the  investor users*/

      public function saveRoundInvestor(Request $request){

         $postData  =  $request->all();

         $userId = Auth::user()->id;
         $companyInfo =  StartupCompany::getCompanyInfoByuserId($userId);

             $validator = Validator::make($request->all(), [
                'startup_role.*' => 'required',
                'startup_role.*'=> 'required'

            ]);

          if ($validator->fails()){
              $response = array(
                    'status' => 0,
                    'msg' => 'Something went wrong',
                    'domain' =>"",
              );

           return \Response::json($response);  

          }else{

            $post =   array(
              'invited_name'  => isset($postData['startup_role']['invited_name']) ? $postData['startup_role']['invited_name'] :"",
              'funding_round' => isset($postData['startup_role']['investment_amount']) ? $postData['startup_role']['investment_amount'] :"",
              'email'         =>isset($postData['startup_role']['email']) ? $postData['startup_role']['email'] :"",
              'startup_id'    => isset($companyInfo->id) ? $companyInfo->id :""
            );

            $StartupRoleInvestor = StartupRoleInvestor::saveStartupRoleInvestor($post,"");

            $response = array(
                    'status' => 1,
                    'msg' => 'User added successfully.',
                    'domain' =>"",
                );

            return \Response::json($response);  
          }

      }


      /*@end of function*/ 



   /*@end of function */ 
}
