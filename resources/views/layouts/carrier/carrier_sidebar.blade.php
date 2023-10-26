       <!----------------------------------------------------------------------------
| SECTION NAV
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

