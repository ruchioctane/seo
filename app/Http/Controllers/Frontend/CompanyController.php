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
use App\Models\Frontend\startupUser; 
use App\Models\Frontend\RoleUser;
use App\Models\Frontend\Profile;
use App\Models\Frontend\FundingRound;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use Image;
use File;
use DB;
class CompanyController extends Controller{
    /**
     * @return \Illuminate\View\View
     */
    public function index(){  

    }



	/*@function for saving the roun details */ 

	public function save_fundingRound(Request $request){

		 $post = $request->all();
	     $user_id = Auth::user()->id;
         $companyInfo =  StartupCompany::getCompanyInfoByuserId($user_id);	
       	 $startup_id = isset($companyInfo->id) ? $companyInfo->id:"";		
		 $saveArr = array(
		 	'currency'=>     isset($post['funding_round']['currency']) ? $post['funding_round']['currency']:"",
		 	'raising_amount'=> isset($post['funding_round']['raising_amount']) ? $post['funding_round']['raising_amount']:"",
		 	'equity_basis'=>   isset($post['funding_round']['equity_basis']) ? $post['funding_round']['equity_basis']:"",
		 	'pre_money_valuation'=> isset($post['funding_round']['pre_money_valuation']) ? $post['funding_round']['pre_money_valuation']:"",
		 	'prev_raised_amount'=>   isset($post['funding_round']['prev_raised_amount']) ? $post['funding_round']['prev_raised_amount']:"",
		 	'other_deal_terms'=> isset($post['funding_round']['other_deal_terms']) ? $post['funding_round']['other_deal_terms']:"",
		 	'startup_id'    => isset($startup_id) ? $startup_id :""
		 );	
		  $saveFunding = FundingRound::saveFunding($saveArr,$startup_id);		

		  if(isset($saveFunding) && !empty($saveFunding)){
		  	  $response = array(
                    'status' => 1,
                    'msg' => 'successfully Updated.',
                    'domain' =>"",
                  );
		  	}else{

				  $response = array(
		                        'status' => 0,
		                        'msg' => 'Something went Wrong.',
		                        'domain' =>"",
		                        //'banner_image'=> $post,
		                );
		  	}

             return \Response::json($response);   
	}


	/*@end of function*/ 



}