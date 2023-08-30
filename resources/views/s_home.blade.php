

@extends('layouts.shipper')

@section('content')


<div class="box-heading">
    <div class="box-title">
      <h3 class="mb-35">CHARGEUR :Tableau de Bord</h3>
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
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

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
                    <h3 class="mb-35">Annonces récentes de transport </h3>
                  </div>
                </div>
                <div class="row">
                  @foreach($transports as $transport)

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                      <div class="card-grid-2 hover-up">
                        <div class="card-grid-2-image-left"><span class="flash"></span>
                          <div class="image-box"><img src="imgs/brands/brand-1.png" alt="jobBox"></div>
                          <div class="right-info"><a class="name-job{{ request()->routeIs('s_offerdetail') ? 'active' : '' }}"  href="{{ route('s_offerdetail') }}">{{ $transport->company_name }}</a>
                            {{-- <span class="location-small">New York, US</span> --}}
                          </div>
                        </div>
                        <div class="card-block-info">
                          <h6><a href="#">{{ ucfirst($transport->origin).'--'. ucfirst($transport->destination) }}</a></h6>
                          <div class="mt-5"><span class="card-briefcase">Date d'expiration :</span><span class="card-time">{{ date("d/m/Y",strtotime($transport->limit_date)) }}</span></div>
                          <p class="font-sm color-text-paragraph mt-15">{{ $transport->description }}</p>
                          <div class="mt-30"><a class="btn btn-grey-small mr-5" href="">{{ $transport->weight }} T</a>
                          </div>
                          <div class="card-2-bottom mt-30">
                            <div class="row">
                              <div class="col-lg-7 col-7"><span class="card-text-price">250.500</span><span class="text-muted">F</span></div>
                              <div class="col-lg-5 col-5 text-end">
                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm{{$transport->id}}">Postuler</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="ModalApplyJobForm{{$transport->id}}" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content apply-job-form">
                                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                  <div class="modal-body pl-30 pr-30 pt-50">
                                      <div class="text-center">
                                          <p class="font-sm text-brand-2">POSTULER A L'ANNONCE </p>
                                          <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Faites une proposition</h2>
                                          <p class="font-sm text-muted mb-30">Entrer les des information clair et valide pour multiplier vos chances</p>
                                      </div>

                                      <form class="login-register text-start mt-20 pb-30" action="{{ route('shipper.announcements.postuler') }}"  method="post" id="formPostuler">
                                          @csrf
                                          <div class="form-group">
                                              <label class="form-label" for="prix">Prix *</label>
                                              <input class="form-control" type="number" name="price" id="price" placeholder="votre meilleur offre">
                                          </div>
                                          <div class="form-group">
                                              <label class="form-label" for="prix">Poids *</label>
                                              <input class="form-control" type="number" name="weight" id="weight" placeholder="Le poids approximatif">
                                          </div>

                                          <div class="form-group">
                                              <label class="form-label" for="description">Description</label>
                                              <input class="form-control" id="description" type="text" required="" name="description" placeholder="description...">
                                              <input class="form-control" id="idUser" name="idUser" value="{{session('userId') }}" type="hidden">
                                              <input class="form-control" id="announce" name="announce" value="{{ $transport->id }}" type="hidden">
                                          </div>
{{--                                          <div class="login_footer form-group d-flex justify-content-between">--}}
{{--                                              <label class="cb-container">--}}
{{--                                                  <input type="checkbox"><span class="text-small">Conditions generales d'utilisation</span><span class="checkmark"></span>--}}
{{--                                              </label><a class="text-muted" href="page-contact.html">En savoir plus</a>--}}
{{--                                          </div>--}}
                                          <div class="form-group">
                                              <button class="btn btn-default hover-up w-100" type="submit" name="login">ENVOYER</button>
                                          </div>
{{--                                          <div class="text-muted text-center">Avez vous besoin d'aides? <a href="page-contact.html">Contactez nous </a></div>--}}
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>

                  @endforeach




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

@section('script')
    <script>
        $(document).ready(function (){
            setTimeout(function(){
                $("div.alert").remove();
            }, 3000 ); //3s
        });
    </script>
@endsection
