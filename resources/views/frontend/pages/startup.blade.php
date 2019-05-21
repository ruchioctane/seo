    <!-- Section: inner-header -->
    
 @extends('frontend.layouts.app')

@section('content')
 <div class="main-content">
    <section class="mainsectionstartup">
      <div class="container">
        <div class="row">
        <div class="col-lg-3 col-md-3">
        <div class="showfiltermobile  visible-xs visible-sm hidden-lg hidden-md">
        <a  data-toggle="modal" data-target="#myModal" class="fullbutonmodal">Filter & Short <span class="value">999</span></a>
        </div>
        <div class="showfilterdesktop  visible-lg visible-md hidden-sm hidden-xs">
        <div class="maindivfilter">
        <h3>Filter Startups By</h3>
       <?php if (isset($data['market_sector']) && !empty($data['market_sector'])){ ?>
        <div class="maindivfiltertitle">Sector</div>
        <?php } ?>
        <ul>
        <?php 
        if(isset($data['market_sector']) && !empty($data['market_sector'])){
        foreach($data['market_sector'] as $sec){ ?>
        <li><label class="checkcontainer mb-0" data-market-id={{$sec['market_id']}}>{{$sec['name']}}<input type="checkbox" class="ani_market" value="{{$sec['market_id']}}"><span class="checkmark"></span></label><span class="valueshow">{{$sec['count']}}</span></li>
        <?php }
        }
        ?> 
        <a data-toggle="collapse" data-target="#demo" class="font-12">Show More</a>
        </ul>
        </div>
        <div class="maindivfilter">
        <?php if (isset($data['technology']) && !empty($data['technology'])){ ?>
        <div class="maindivfiltertitle">Technology</div>
        <?php } ?>
        <ul>
        <?php 
        if(isset($data['technology']) && !empty($data['technology'])){
        foreach($data['technology'] as $sec){ ?>
        <li><label class="checkcontainer mb-0" data-technology-id={{$sec['technology_id']}}>{{$sec['name']}}<input type="checkbox" class="ani_technology" value="{{$sec['technology_id']}}"><span class="checkmark"></span></label><span class="valueshow">{{$sec['count']}}</span></li>
        <?php }
        }
        ?>  
        </ul>
        </div>
        <div class="maindivfilter">
        <?php if (isset($data['startup_business_goal']) && !empty($data['startup_business_goal'])){ ?>
        <div class="maindivfiltertitle">Business Goal</div>
        <?php } ?>
        <ul>
        <?php 
        if(isset($data['startup_business_goal']) && !empty($data['startup_business_goal'])){
        foreach($data['startup_business_goal'] as $sec){ ?>
        <li><label class="checkcontainer mb-0" data-technology-id={{$sec['business_goal_id']}}>{{$sec['name']}}<input type="checkbox" class="ani_business_goal" value="{{$sec['business_goal_id']}}"><span class="checkmark"></span></label><span class="valueshow">{{$sec['count']}}</span></li>
        <?php }
        }
        ?>
        </ul>
        </div>
        </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 filterby">
        <div class="row visible-lg visible-md hidden-sm hidden-xs">
        <div class="clearfix"></div>
        <div class="filetrportion">
          <div class="row">
            <div class="col-lg-9">
              <div class="col-lg-5">
                <div class="col-lg-3"><span class="pull-left short">Sort</span> </div>
                <div class="col-lg-9">
                  <div class="styled-select">
                    <select name="car_select" class="form-control" id="startup_sorting" required="">
                    <option value="0">- Select Relevent -</option>
                    <option value="1">A TO Z</option>
                    <option value="2">Z TO A</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">{{ $startups->links() }}</div>
          </div>
          <div class="row">
              <div class="container">
                  @foreach ($startups_data as $startup)
                   <?php 
                    // stdClass Object
                    // (
                    //     [id] => 1
                    //     [company_name] => StartupA
                    //     [company_website] => google.com
                    //     [location] => Noida
                    //     [number_of_employees] => 0
                    //     [markets] => ["1","2"]
                    //     [technology] => ["1","3"]
                    //     [business_goal] => ["1"]
                    //     [round_type] => 6
                    //     [amount] => 100000
                    //     [closing_date] => 0000-00-00 00:00:00
                    //     [deck_url] => google.vcom
                    //     [high_concept_pitch] => 
                    //     [product] => 
                    //     [logo] => 
                    //     [investing] => 
                    //     [meeting_investors] => 
                    //     [country] => 99
                    //     [mobile] => 1231231231
                    //     [created_by] => 2019-05-18 21:52:15
                    //     [created_at] => 2019-05-18 16:22:15
                    //     [updated_at] => 2019-05-18 16:28:22
                    //     [status] => 1
                    //     [user_id] => 75
                    //     [is_deleted] => 0
                    // )
                   // echo "<pre>";
                   //  print_r($startup);
                   ?>
                    <!-- <div class="col-sm-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;"> -->
                    <div class="col-sm-3">
                      <article class="post clearfix bg-white">
                        <div class="entry-header">
                        <h4 class="entry-title text-white"><a  href="#">Open Round</a></h4>
                          <div class="post-thumb thumb"> 
                            <img src="/images/s1.jpg" alt="" class="img-responsive img-fullwidth">
                          </div>
                        </div>
                        <div class="entry-content">
                          <p>{{$startup->id}}#{{$startup->company_name}}</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis</p>
                          <div class="listadata">
                          <ul class="listdatafilter">
                          <li>Investment Target<span>{{$startup->amount}}</span></li>
                          <li>Funding Round<span>{{$startup->round_type_text}}</span></li>
                          <li>Close Date<span>{{$startup->closing_date}}</span></li>
                          </ul>
                          </div>
                        </div>
                      </article>
                    </div>
                  @endforeach
              </div>            
            </div>
            <div class="row">
              <div class="col-lg-9"></div>
              <div class="col-lg-3">{{ $startups->links() }}</div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
  <script>
   $(document).ready(function(){
//    alert(window.location.href);
var pathname = new URL(window.location.href).pathname;
console.dir(pathname);
console.dir(pathname.split("/"));
var splitedUrl = pathname.split("/");
//2=>sector, 3=> technology , 4=> goal 5=> sort up
///alert(pathname.split("/"));

    sortBy = 0;
    sector = [0];
    technology = [0];
    businness_goal = [0];

if(typeof splitedUrl[2] != "undefined") {
  sector = splitedUrl[2].split(",");
  $(".ani_market").each(function(index){
    if($.inArray($(this).val(), sector) == 1) {
      $(this).prop("checked", true);      
    }
  });
}
if(typeof splitedUrl[3] != "undefined") { 
  technology = splitedUrl[3].split(","); 
  $(".ani_technology").each(function(index){
    if($.inArray($(this).val(), technology) == 1) {
      $(this).prop("checked", true);      
    }
  });
}
if(typeof splitedUrl[4] != "undefined") { 
  businness_goal = splitedUrl[4].split(","); 
  $(".ani_business_goal").each(function(index){
    if($.inArray($(this).val(), businness_goal) == 1) {
      $(this).prop("checked", true);      
    }
  });
}






    $("#startup_sorting").on('click', function(){
      sortBy = $(this).val();
      getStartUpList();
    });

    $(".ani_market").on('click', function(){
      if($(this).prop("checked") == true) {
        sector.push($(this).val());
      } else {
        sector.splice($.inArray($(this).val(), sector),1);
      }
      console.dir(sector);
      getStartUpList();
    });
    $(".ani_technology").on('click', function(){
      if($(this).prop("checked") == true) {
        technology.push($(this).val());
      } else {
        technology.splice($.inArray($(this).val(), technology),1);
      }
      console.dir(technology);
      getStartUpList();
    });
    $(".ani_business_goal").on('click', function(){
      if($(this).prop("checked") == true) {
        businness_goal.push($(this).val());
      } else {
        businness_goal.splice($.inArray($(this).val(), businness_goal),1);
      }
      console.dir(businness_goal);
      getStartUpList();
    });
   });

   function getStartUpList() {

//http://localhost:8000/startupfilter/1,2/2,3/3,4/4
//var url = "http://localhost:8000/startupfilter/";
var url = "/startupfilter/";
url += sector.join(',')+"/";
url += technology.join(',')+"/";
url += businness_goal.join(',')+"/";
url += sortBy;
window.location.href=url;
// routes.php
// Route::get('/topics/{category}/{forum}', [
//     'as'   => 'topics.show',
//     'uses' => 'TopicsController@show'
// ]);


// routes.php
// Route::get('/startupfilter/{market}/{technology}/{business_goal}/sort_by', [
//     'as'   => 'topics.show',
//     'uses' => 'UserController@startupfilter'
// ]);



//startupfilter
    //http://localhost:8000/startupfilter
    //window.location.href=()
   }
  </script>
  </div>
  <!-- end main-content -->
  @endsection