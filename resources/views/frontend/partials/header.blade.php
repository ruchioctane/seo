  <!-- Header -->
  <header id="header" class="header">
    
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed redbg">
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-8 col-sm-7 col-xs-7 mobilezero">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip xs-pull-center" href="{{ url('/') }}">
              <img src="images/logo-wide.png" alt="">
            </a>
            <ul class="menuzord-menu">
  
              <li><a href="investors.html">INVEST</a>
                
              </li>           
              
              
              
              <li><a href="{{asset('startup')}}">Startups</a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col4">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="{{asset('startup')}}"> E-Commerce</a></li>
                        <li><a href="{{asset('startup')}}">Warehousing</a></li>
                        <li><a href="{{asset('startup')}}">Trucking</a></li>
                        <li><a href="{{asset('startup')}}">Enterprise Resource Planning</a></li>
            <li><a href="#">Sensor/ Asset Tagging</a></li>
                        <li><a href="{{asset('startup')}}">Freight & Supply Chain visibility</a></li>
                        

                      </ul>
                    </div>
                    <div class="col4">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="{{asset('startup')}}">Last Mile Delivery</a></li>
                        <li><a href="{{asset('startup')}}">Inventory Management</a></li>
                        <li><a href="{{asset('startup')}}">Security</a></li>
                        <li><a href="{{asset('startup')}}">Trade Finance</a></li>
                         <li><a href="{{asset('startup')}}">Insurance</a></li>
                          <li><a href="{{asset('startup')}}">Specialized Logistics</a></li>

                      </ul>
                    </div>
                    <div class="col4">
                      <div class="browseall"><a href="{{asset('startup')}}">
                      Browse <span>Startups</span></a>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </li>
               <li><a href="#">News</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">About</a>
                <ul class="dropdown">
                  <li><a href="#">About us</a></li>           
                  <li><a href="#">Advisor</a></li>
                  <li><a href="#">For Startups</a></li>
                <li><a href="#">Join us</a></li>
                <li><a href="#">Scale your startup</a></li>
 
                </ul>
              </li>           
              

            </ul>
          </nav>
          </div>
          <div class="col-lg-4 col-sm-5 col-sx-5 mobilezero">
          <div class="search-form hidden-sm hidden-xs visible-lg visible-md">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input maininputdesktop">
                      <span class="input-group-btn">
                      <button type="button" class="btn search-button desktopserch"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
                 <button type="submit" class="btn search-button hidden-lg hidden-md visible-sm visible-xs mobileshow"><i class="fa fa-search"></i></button>
           <div class="login">

            <?php if( !empty(Auth::user()) ){?>
              <a href="{{asset('feedActivity')}}" class="text-uppercase">Profile</a>
              <a href="{{asset('logout')}}" class="text-uppercase">Logout</a>
              
            <?php }else{ ?>
            <a href="{{asset('login')}}" class="text-uppercase">Login</a>
             <a href="{{asset('new-user')}}" class="text-uppercase">join</a>
          <?php } ?>
           </div> 
              
          </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  