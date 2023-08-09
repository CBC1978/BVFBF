

@extends('layouts.carrier')

@section('content')
<div class="box-heading">
    <div class="box-title"> 
      <h3 class="mb-35">TRANSPORTEUR :Tableau de Bord</h3>
    </div>
    <div class="box-breadcrumb"> 
      <div class="breadcrumbs">
        <ul> 
          <li> <a class="icon-home" href="index.html">Tableau de bord</a></li>
          <li><span>Dashboard</span></li>
          
        </ul>
      </div>
    </div>
  </div>

  <div class="row"> 
    <div class="col-xxl-12 col-xl-12 col-lg-7">
      <div class="section-box">
        <div class="row"> 
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6"> 
            <div class="card-style-1 hover-up">
              <div class="card-image"> <img src="imgs/page/dashboard/computer.svg" alt="jobBox"></div>
              <div class="card-info"> 
                <div class="card-title">
                  <h3>15<span class="font-sm status up">17<span>%</span></span>
                  </h3>
                </div>
                <p class="color-text-paragraph-2">Nombre de d'annonce</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6"> 
            <div class="card-style-1 hover-up">
              <div class="card-image"> <img src="imgs/page/dashboard/computer.svg" alt="jobBox"></div>
              <div class="card-info"> 
                <div class="card-title">
                  <h3>158<span class="font-sm status up">12<span>%</span></span>
                  </h3>
                </div>
                <p class="color-text-paragraph-2">Nombre de offres</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6"> 
            <div class="card-style-1 hover-up">
              <div class="card-image"> <img src="imgs/page/dashboard/computer.svg" alt="jobBox"></div>
              <div class="card-info"> 
                <div class="card-title">
                  <h3>68<span class="font-sm status up">25<span>%</span></span>
                  </h3>
                </div>
                <p class="color-text-paragraph-2">Nombre de contrat</p>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6"> 
            <div class="card-style-1 hover-up">
              <div class="card-image"> <img src="imgs/page/dashboard/computer.svg" alt="jobBox"></div>
              <div class="card-info"> 
                <div class="card-title">
                  <h3>8<span class="font-sm status up">21<span>%</span></span>
                  </h3>
                </div>
                <p class="color-text-paragraph-2">Contrat ce mois</p>
              </div>
            </div>
          
          

<!----------------------------------------------------------------------------
|FIN  SECTION VU RAPIDE
|--------------------------------------------------------------------------------
   -->

     
    </div>
  
    </div>
  </div>
    <div class="row"> 
    <div class="col-lg-12"> 
      <div class="section-box">
        <div class="container"> 
          <div class="panel-white mb-30">
            <div class="box-padding">
              <div class="box-filters-job">
                <div class="row">
                  <div class="box-title"> 
                    <h3 class="mb-35">Offres Recentes</h3>
                  </div> 
              </div>
              <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="imgs/brands/brand-1.png" alt="jobBox"></div>
                      <div class="right-info"><a class="name-job{{ request()->routeIs('offer_details') ? 'active' : '' }}"  href="{{ route('offer_details') }}">ATX Transit</a>
                        {{-- <span class="location-small">New York, US</span> --}}
                      </div>
                    </div>
                    <div class="card-block-info">
                      <h6><a href="offer-details.html">BOBO-OUAGADOUGOU</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Datelimite :</span><span class="card-time">12<span> jours</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="">14 Tonnes</a><a class="btn btn-grey-small mr-5" href="">7 m3</a>
                      </div>
                      <div class="card-2-bottom mt-30">
                        <div class="row">
                          <div class="col-lg-7 col-7"><span class="card-text-price">250.500</span><span class="text-muted">F</span></div>
                          <div class="col-lg-5 col-5 text-end">
                            <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Postuler</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="imgs/brands/brand-1.png" alt="jobBox"></div>
                      <div class="right-info"><a class="name-job" href="company-details.html">ATX Transit</a>
                        {{-- <span class="location-small">New York, US</span> --}}
                      </div>
                    </div>
                    <div class="card-block-info">
                      <h6><a href="offer-details.html">BOBO-OUAGADOUGOU</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Datelimite :</span><span class="card-time">12<span> jours</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="">14 Tonnes</a><a class="btn btn-grey-small mr-5" href="">7 m3</a>
                      </div>
                      <div class="card-2-bottom mt-30">
                        <div class="row">
                          <div class="col-lg-7 col-7"><span class="card-text-price">250.500</span><span class="text-muted">F</span></div>
                          <div class="col-lg-5 col-5 text-end">
                            <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Postuler</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="imgs/brands/brand-1.png" alt="jobBox"></div>
                      <div class="right-info"><a class="name-job" href="company-details.html">ATX Transit</a>
                        {{-- <span class="location-small">New York, US</span> --}}
                      </div>
                    </div>
                    <div class="card-block-info">
                      <h6><a href="offer-details.html">BOBO-OUAGADOUGOU</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Datelimite :</span><span class="card-time">12<span> jours</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="">14 Tonnes</a><a class="btn btn-grey-small mr-5" href="">7 m3</a>
                      </div>
                      <div class="card-2-bottom mt-30">
                        <div class="row">
                          <div class="col-lg-7 col-7"><span class="card-text-price">250.500</span><span class="text-muted">F</span></div>
                          <div class="col-lg-5 col-5 text-end">
                            <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Postuler</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="imgs/brands/brand-1.png" alt="jobBox"></div>
                      <div class="right-info"><a class="name-job" href="company-details.html">ATX Transit</a>
                        {{-- <span class="location-small">New York, US</span> --}}
                      </div>
                    </div>
                    <div class="card-block-info">
                      <h6><a href="offer-details.html">BOBO-OUAGADOUGOU</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Datelimite :</span><span class="card-time">12<span> jours</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="">14 Tonnes</a><a class="btn btn-grey-small mr-5" href="">7 m3</a>
                      </div>
                      <div class="card-2-bottom mt-30">
                        <div class="row">
                          <div class="col-lg-7 col-7"><span class="card-text-price">250.500</span><span class="text-muted">F</span></div>
                          <div class="col-lg-5 col-5 text-end">
                            <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Postuler</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-10">
    <div class="section-box">
      <div class="container"> 
        <div class="panel-white pt-30 pb-30 pl-15 pr-15">
          <div class="box-swiper">
            <div class="swiper-container swiper-group-10 swiper-initialized swiper-horizontal swiper-pointer-events">
              <div class="swiper-wrapper" style="transform: translate3d(-2114px, 0px, 0px); transition-duration: 0ms;" id="swiper-wrapper-f69737219ea2a57d" aria-live="off"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="1 / 10"> <img src="imgs/page/dashboard/microsoft.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="2 / 10"> <img src="imgs/page/dashboard/sony.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="3 / 10"> <img src="imgs/page/dashboard/acer.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="4 / 10"> <img src="imgs/page/dashboard/nokia.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="5 / 10"> <img src="imgs/page/dashboard/asus.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="6 / 10"> <img src="imgs/page/dashboard/casio.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="7 / 10"> <img src="imgs/page/dashboard/dell.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="8 / 10"> <img src="imgs/page/dashboard/panasonic.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="8" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="9 / 10"> <img src="imgs/page/dashboard/vaio.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="9" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="10 / 10"> <img src="imgs/page/dashboard/sony.svg" alt="jobBox"></div>
                <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="1 / 10"> <img src="imgs/page/dashboard/microsoft.svg" alt="jobBox"></div>
                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="2 / 10"> <img src="imgs/page/dashboard/sony.svg" alt="jobBox"></div>
                <div class="swiper-slide" data-swiper-slide-index="2" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="3 / 10"> <img src="imgs/page/dashboard/acer.svg" alt="jobBox"></div>
                <div class="swiper-slide" data-swiper-slide-index="3" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="4 / 10"> <img src="imgs/page/dashboard/nokia.svg" alt="jobBox"></div>
                <div class="swiper-slide" data-swiper-slide-index="4" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="5 / 10"> <img src="imgs/page/dashboard/asus.svg" alt="jobBox"></div>
                <div class="swiper-slide" data-swiper-slide-index="5" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="6 / 10"> <img src="imgs/page/dashboard/casio.svg" alt="jobBox"></div>
                <div class="swiper-slide" data-swiper-slide-index="6" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="7 / 10"> <img src="imgs/page/dashboard/dell.svg" alt="jobBox"></div>
                <div class="swiper-slide" data-swiper-slide-index="7" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="8 / 10"> <img src="imgs/page/dashboard/panasonic.svg" alt="jobBox"></div>
                <div class="swiper-slide" data-swiper-slide-index="8" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="9 / 10"> <img src="imgs/page/dashboard/vaio.svg" alt="jobBox"></div>
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="9" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="10 / 10"> <img src="imgs/page/dashboard/sony.svg" alt="jobBox"></div>
              <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="1 / 10"> <img src="imgs/page/dashboard/microsoft.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="2 / 10"> <img src="imgs/page/dashboard/sony.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="3 / 10"> <img src="imgs/page/dashboard/acer.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="4 / 10"> <img src="imgs/page/dashboard/nokia.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="5 / 10"> <img src="imgs/page/dashboard/asus.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="6 / 10"> <img src="imgs/page/dashboard/casio.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="7 / 10"> <img src="imgs/page/dashboard/dell.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="8 / 10"> <img src="imgs/page/dashboard/panasonic.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="8" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="9 / 10"> <img src="imgs/page/dashboard/vaio.svg" alt="jobBox"></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="9" style="width: 85.7px; margin-right: 20px;" role="group" aria-label="10 / 10"> <img src="imgs/page/dashboard/sony.svg" alt="jobBox"></div></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer mt-20">
    <div class="container">
      <div class="box-footer">
        <div class="row">
          <div class="col-md-6 col-sm-12 mb-25 text-center text-md-start">
            <p class="font-sm color-text-paragraph-2">© 2022 - <a class="color-brand-2" href="https://themeforest.net/item/jobbox-job-portal-html-bootstrap-5-template/39217891" target="_blank">JobBox </a>Dashboard <span> Made by  </span><a class="color-brand-2" href="http://alithemes.com" target="_blank"> AliThemes</a></p>
          </div>
          <div class="col-md-6 col-sm-12 text-center text-md-end mb-25">
            <ul class="menu-footer">
              <li><a href="#">About</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Policy</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
</div></div>
@endsection
