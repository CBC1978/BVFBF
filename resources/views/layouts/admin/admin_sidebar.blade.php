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
    left: 0; 
    z-index: 100;
  }
</style>

        <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
        <!-- Mobile menu (hidden by default) -->
        <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-content-area">
                    <div class="perfect-scroll">
                        <!-- Mobile search -->
                        <div class="mobile-search mobile-header-border mb-30">
                            <form action="#">
                                <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                            </form>
                        </div>
                        <div class="mobile-menu-wrap mobile-header-border">
                          <nav>
                            <ul class="main-menu">
                              <li>
                                  <a class="dashboard2 {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"><img src="{{ asset('imgs/page/dashboard/dashboard.svg') }}" alt="jobBox"><span class="name">A_Accueil</span></a>
                              <li>
                                  <a class="dashboard2 {{ request()->routeIs('a_user_gestion') ? 'active' : '' }}" href="{{ route('a_user_gestion') }}"><img src="{{ asset('imgs/page/dashboard/candidates.svg') }}" alt="jobBox"><span class="name">User Gestion </span></a>
                              <li>
                                  <a class="dashboard2 {{ request()->routeIs('admin.entreprise') ? 'active' : '' }}" href="{{ route('admin.entreprise') }}"><img src="{{ asset('imgs/page/dashboard/candidates.svg') }}" alt="jobBox"><span class="name">entreprise </span></a>
                              <li>
                                  <a class="dashboard2 {{ request()->routeIs('annonces.a_annonce') ? 'active' : '' }}" href="{{ route('annonces.a_annonce') }}"><img src="{{ asset('imgs/page/dashboard/tasks.svg') }}" alt="jobBox"><span class="name">Annonces Gestion </span></a>
                              <li>
                                  <a class="dashboard2 {{ request()->routeIs('admin.parameter.displayAdminSettings') ? 'active' : '' }}" href="{{ route('admin.parameter.displayAdminSettings') }}"><img src="{{ asset('imgs/page/dashboard/tasks.svg') }}" alt="jobBox"><span class="name">Paramètres </span></a>
                            </ul>
                          </nav>
                        </div>
                        
                    </div>
                </div>
            </div>
         </div>

         <div class="nav"><a class="btn btn-expanded"></a>

            <nav class="nav-main-menu">
              <ul class="main-menu">
                <li>
                  <div class="menu-box {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}"><img src="{{ asset('imgs/page/dashboard/dashboard.svg') }}" alt="jobBox"><span class="name">Accueil</span></a>
                  </div>
                </li>

                <li>
                  <div class="menu-box {{ request()->routeIs('a_user_gestion') ? 'active' : '' }}">
                    <a class="" href="{{ route('a_user_gestion') }}"><img src="{{ asset('imgs/page/dashboard/candidates.svg') }}" alt="jobBox"><span class="name">User Gestion </span></a>
                  </div>
                </li>

                <li>
                  <div class="menu-box {{ request()->routeIs('admin.entreprise') ? 'active' : '' }}">
                    <a href="{{ route('admin.entreprise') }}"><img src="{{ asset('imgs/page/dashboard/candidates.svg') }}" alt="jobBox"><span class="name">entreprise </span></a>
                  </div>
                </li>

                <li>
                  <div class="menu-box {{ request()->routeIs('annonces.a_annonce') ? 'active' : '' }}"></div>
                   <a href="{{ route('annonces.a_annonce') }}"><img src="{{ asset('imgs/page/dashboard/tasks.svg') }}" alt="jobBox"><span class="name">Annonces </span></a>
                </li>

             {{--   <li>
                        <a class="dashboard2 {{ request()->routeIs('admin.parameter.displayAdminSettings') ? 'active' : '' }}" href="{{ route('admin.parameter.displayAdminSettings') }}"><img src="{{ asset('imgs/page/dashboard/tasks.svg') }}" alt="jobBox"><span class="name">Paramètres </span></a>
                    </li>--}}
                
              </ul>
            </nav>
              <div class="border-bottom mb-20 mt-20"></div>
            {{-- <div class="box-profile-completed text-center mb-30">
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
        
        <div class="burger-icon burger-icon-white">
    <span class="burger-icon-top"></span>
    <span class="burger-icon-mid"></span>
    <span class="burger-icon-bottom"></span>
</div>
