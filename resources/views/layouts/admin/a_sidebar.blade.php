       <!----------------------------------------------------------------------------
| SECTION NAV
|--------------------------------------------------------------------------------
         -->
         <div class="nav"><a class="btn btn-expanded"></a>
        
            <nav class="nav-main-menu">
              <ul class="main-menu">
                <li> <a class="dashboard2 {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"><img src="{{ asset('imgs/page/dashboard/dashboard.svg') }}" alt="jobBox"><span class="name">A_Accueil</span></a>
                </li>
                <li> <a class="dashboard2 {{ request()->routeIs('a_user_gestion') ? 'active' : '' }}" href="{{ route('a_user_gestion') }}"><img src="{{ asset('imgs/page/dashboard/candidates.svg') }}" alt="jobBox"><span class="name">User Gestion </span></a>
                </li>
                
                
                
                
                
                
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
        
   