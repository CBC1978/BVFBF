@extends('layouts.app')

@section('content')

<div class="box-content">
    <div class="box-heading">
        <div class="box-title">
            <h3 class="mb-35">Offres de Fret/Transport</h3>
        </div>
        <div class="box-breadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li><a class="icon-home" href="index.html">Dashboard</a></li>
                    <li><span>Offres</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-7">
            <div class="section-box">
                <div class="row">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-box">
                                <div class="container">
                                    <div class="panel-white mb-30">
                                        <div class="box-padding">
                                            <div class="box-filters-job">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-5"><span
                                                            class="font-sm text-showing color-text-paragraph">Showing 41-60 of 944 jobs</span>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                                                        <div class="display-flex2">
                                                            <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                                                                <div class="dropdown dropdown-sort">
                                                                    <button class="btn dropdown-toggle"
                                                                            id="dropdownSort" type="button"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"
                                                                            data-bs-display="static"><span>12</span><i
                                                                            class="fi-rr-angle-small-down"></i></button>
                                                                    <ul class="dropdown-menu dropdown-menu-light"
                                                                        aria-labelledby="dropdownSort">
                                                                        <li><a class="dropdown-item active"
                                                                               href="#">10</a></li>
                                                                        <li><a class="dropdown-item" href="#">12</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">20</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="box-border"><span
                                                                    class="text-sortby">Sort by:</span>
                                                                <div class="dropdown dropdown-sort">
                                                                    <button class="btn dropdown-toggle"
                                                                            id="dropdownSort2" type="button"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"
                                                                            data-bs-display="static">
                                                                        <span>Newest Post</span><i
                                                                            class="fi-rr-angle-small-down"></i></button>
                                                                    <ul class="dropdown-menu dropdown-menu-light"
                                                                        aria-labelledby="dropdownSort2">
                                                                        <li><a class="dropdown-item active" href="#">Newest
                                                                                Post</a></li>
                                                                        <li><a class="dropdown-item" href="#">Oldest
                                                                                Post</a></li>
                                                                        <li><a class="dropdown-item" href="#">Rating
                                                                                Post</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="box-view-type"><a class="view-type"
                                                                                          href="my-job-list.html"><img
                                                                        src="imgs/template/icons/icon-list.svg"
                                                                        alt="jobBox"></a><a class="view-type"
                                                                                            href="my-job-grid.html"><img
                                                                        src="imgs/template/icons/icon-grid-hover.svg"
                                                                        alt="jobBox"></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
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
                                                          <div class="col-lg-7 col-7"><span class="card-text-price">250.500</span><span class="text-muted">FCFA</span></div>
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
                                                          <div class="col-lg-7 col-7"><span class="card-text-price">250.500</span><span class="text-muted">FCFA</span></div>
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
                                                          <div class="col-lg-7 col-7"><span class="card-text-price">250.500</span><span class="text-muted">FCFA</span></div>
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
                                                          <div class="col-lg-7 col-7"><span class="card-text-price">250.500</span><span class="text-muted">FCFA</span></div>
                                                          <div class="col-lg-5 col-5 text-end">
                                                            <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Postuler</div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                
                                              </div>
                                            <div class="paginations">
                                                <ul class="pager">
                                                    <li><a class="pager-prev" href="#"></a></li>
                                                    <li><a class="pager-number" href="#">1</a></li>
                                                    <li><a class="pager-number" href="#">2</a></li>
                                                    <li><a class="pager-number" href="#">3</a></li>
                                                    <li><a class="pager-number" href="#">4</a></li>
                                                    <li><a class="pager-number" href="#">5</a></li>
                                                    <li><a class="pager-number active" href="#">6</a></li>
                                                    <li><a class="pager-number" href="#">7</a></li>
                                                    <li><a class="pager-next" href="#"></a></li>
                                                </ul>
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
