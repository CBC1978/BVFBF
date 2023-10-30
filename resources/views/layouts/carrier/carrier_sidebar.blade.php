       <!----------------------------------------------------------------------------
| SECTION NAV
<<<<<<< HEAD
|--------------------------------------------------------------------------------
         -->

<style>
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
                              <li> <a class="dashboard2 {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"><img src="{{ asset('imgs/page/dashboard/dashboard.svg') }}" alt="jobBox"><span class="name">Accueil</span></a>
                              </li>
                              <li> <a class="dashboard2 {{ request()->routeIs('shipper.announcements.index') ? 'active' : '' }}" href="{{ route('shipper.announcements.index') }}"><img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox"><span class="name">Annonces</span></a>
                              </li>
                              <li> <a class="dashboard2 {{ request()->routeIs('carrier.announcements.user') ? 'active' : '' }}" href="{{ route('carrier.announcements.user') }}"><img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox"><span class="name">Mes Annonces</span></a>
                              </li>
                              <li> <a class="dashboard2 {{ request()->routeIs('carrier.announcements.carrier_myrequest') ? 'active' : '' }}" href="{{ route('carrier.announcements.carrier_myrequest') }}"><img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox"><span class="name">Mes Demandes</span></a>
                              </li>
                              <li> <a class="dashboard2 {{ request()->routeIs('carrier.announcements.contract') ? 'active' : '' }}" href="{{ route('carrier.announcements.contract') }}"><img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox"><span class="name">Contrat</span></a>
                              </li>
                              <li> <a class="dashboard2" href="stat.html"><img src="{{ asset('imgs/page/dashboard/jobs.svg') }}" alt="jobBox"><span class="name">Statistiques</span></a>
                              </li>
                              <li> <a class="dashboard2 {{ request()->routeIs('carrier.parameter.displayCarrierSettings') ? 'active' : '' }}" href="{{ route('carrier.parameter.displayCarrierSettings') }}"><img src="{{ asset('imgs/page/dashboard/settings.svg') }}" alt="jobBox"><span class="name">Paramètres</span></a>
                              </li>
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
                        <div class="menu-box {{ request()->routeIs('shipper.announcements.index') ? 'active' : '' }}">
                          <a href="{{ route('shipper.announcements.index') }}"><img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox"><span class="name">Annonces</span></a>
                        </div>
                      </li>

                      <li> 
                        <div class="menu-box {{ request()->routeIs('carrier.announcements.user') ? 'active' : '' }}">
                          <a href="{{ route('carrier.announcements.user') }}"><img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox"><span class="name">Mes Annonces</span></a>
                        </div>
                      </li>

                      <li>
                        <div class="menu-box {{ request()->routeIs('carrier.announcements.carrier_myrequest') ? 'active' : '' }}">
                            <a href="{{ route('carrier.announcements.carrier_myrequest') }}">
                                <img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox">
                                <span class="name">Mes Demandes</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box {{ request()->routeIs('carrier.announcements.contract') ? 'active' : '' }}">
                            <a href="{{ route('carrier.announcements.contract') }}">
                                <img src="{{ asset('imgs/page/dashboard/recruiters.svg') }}" alt="jobBox">
                                <span class="name">Contrat</span>
                            </a>
                        </div>
                    </li>
                    {{--
                    <li>
                        <div class="menu-box">
                            <a href="stat.html">
                                <img src="{{ asset('imgs/page/dashboard/jobs.svg') }}" alt="jobBox">
                                <span class="name">Statistiques</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box {{ request()->routeIs('carrier.parameter.displayCarrierSettings') ? 'active' : '' }}">
                            <a href="{{ route('carrier.parameter.displayCarrierSettings') }}">
                                <img src="{{ asset('imgs/page/dashboard/settings.svg') }}" alt="jobBox">
                                <span class="name">Paramètres</span>
                            </a>
                        </div>
                    </li> --}}
                </ul>
          </nav>
        </div>

      </div>

