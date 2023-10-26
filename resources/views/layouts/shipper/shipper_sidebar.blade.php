       <!----------------------------------------------------------------------------
| SECTION NAV
|--------------------------------------------------------------------------------
         --><style>
  .menu-box {
      padding: 2px;
  }

  .menu-box {
      padding: 0px;
  }

  .menu-box a {
      text-decoration: none;
      color: #333; 
      display: block;
  }

  .menu-box a.active {
      font-weight: bold;
  }
  .nav-main-menu{
    position: fixed; 
    width: 280px; 
    top: 105px; 
    /*box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);*/ 
    left: 0; z-index: 100;
  }
</style>

         <div class="nav"><a class="btn btn-expanded"></a>
        
            <nav class="nav-main-menu">
              <ul class="main-menu">
                <li> 
                  <div class="menu-box {{ request()->routeIs('home') ? 'active' : '' }}"></div>
                  <a class="" href="{{ route('home') }}"><img src="{{ asset('imgs/page/dashboard/dashboard.svg') }}" alt="jobBox"><span class="name">Accueil</span></a>
                </li>

                <li>
                  <div class="menu-box {{ request()->routeIs('carrier.announcements.index') ? 'active' : '' }}"></div>
                   <a class="" href="{{ route('carrier.announcements.index') }}"><img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox"><span class="name">Annonces</span></a>
                </li>

                <li>
                  <div class="menu-box {{ request()->routeIs('shipper.announcements.user') ? 'active' : '' }}"></div>
                   <a class="" href="{{ route('shipper.announcements.user') }}"><img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox"><span class="name">Mes Annonces</span></a>
                </li>

                <li> 
                  <div class="menu-box {{ request()->routeIs('shipper.announcements.shipperMyrequest') ? 'active' : '' }}"></div>
                  <a class="" href="{{ route('shipper.announcements.shipperMyrequest') }}"><img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox"><span class="name">Mes demandes</span></a>
                </li>
{{--
                <li>
                  <div class="menu-box"></div>
                   <a class="dashboard2" href="stat.html"><img src="{{ asset('imgs/page/dashboard/jobs.svg') }}" alt="jobBox"><span class="name">Statistiques</span></a>
                </li>
                
                <li>
                  <div class="menu-box {{request()->routeIs('shipper.parameter.displayShipperSettings')? 'active' : '' }}"></div>
                   <a class="" href="{{ route('shipper.parameter.displayShipperSettings') }}"><img src="{{ asset('imgs/page/dashboard/settings.svg') }}" alt="jobBox"><span class="name">Paramètres</span></a>
                </li>
                --}}
                
              </ul>
            </nav>
            {{-- <div class="border-bottom mb-20 mt-20"></div>
            <div class="box-profile-completed text-center mb-30">
              <div id="circle-staticstic-demo"></div>
              <h6 class="mb-10">Profile Completed</h6>
              <p class="font-xs color-text-mutted">Please add detailed information to your profile. This will help you develop your career more quickly.</p>
            </div>
            <div class="sidebar-border-bg mt-50"><span class="text-grey">WE ARE</span><span class="text-hiring">HIRING</span>
              <p class="font-xxs color-text-paragraph mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto</p>
              <div class="mt-15"><a class="btn btn-paragraph-2" href="#">Know More</a></div>
            </div> --}}
          </div>
          
        </div>
        
   