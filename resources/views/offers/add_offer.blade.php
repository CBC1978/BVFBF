@extends('layouts.app')

@section('content')
<div class="box-content">
    <div class="box-heading">
        <div class="box-title">
            <h3 class="mb-35">Ajouter une offre</h3>
        </div>
        <div class="box-breadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li> <a class="icon-home" href="index.html">OFFRE</a></li>
                    <li><span>Ajoute d'offre</span></li>
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
                                        <div class="box-padding bg-postjob">
                                            <h5 class="icon-edu">Fait une offre</h5>
                                            <div class="row mt-30">
                                                <div class="col-lg-9">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group mb-30">
                                                                <label class="font-sm color-text-mutted mb-10">Résumer en 14 mots *</label>
                                                                <input class="form-control" type="text" placeholder="Mettrez que des mots clé">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group mb-30">
                                                                <label class="font-sm color-text-mutted mb-10">Date limite*</label>
                                                                <input class="form-control" type="date" name="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group mb-30">
                                                                <label class="font-sm color-text-mutted mb-10"> description detaillée de l'offre *</label>
                                                                <textarea class="form-control" name="message" rows="8"> </textarea>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group mb-30">
                                                                <label class="font-sm color-text-mutted mb-10">Type de vehicule *</label>
                                                                <select class="form-control">
                                                                    <option value="1">Remote</option>
                                                                    <option value="1">Office</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group mb-30">
                                                                <label class="font-sm color-text-mutted mb-10">Nombre de vehicule</label>
                                                                <input class="form-control" type="text" placeholder="Nombre de vehicule disponible pour l'offre">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group mb-30">
                                                                <label class="font-sm color-text-mutted mb-10">Volume</label>
                                                                <input class="form-control" type="text" placeholder="En metre cube">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group mb-30">
                                                                <label class="font-sm color-text-mutted mb-10">Poids</label>
                                                                <input class="form-control" type="text" placeholder="En kilogramme">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group mb-30">
                                                                <label class="font-sm color-text-mutted mb-10">Prix</label>
                                                                <input class="form-control" type="text" placeholder="">
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-lg-6 col-md-6">
                                                            <div class="form-group mb-30">
                                                                <div class="box-upload">
                                                                    <div class="add-file-upload">
                                                                        <input class="fileupload" type="file" name="file">
                                                                    </div><a class="btn btn-default">Ajouter un fichier</a>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group mb-30 box-file-uploaded d-flex align-items-center"><span>ajouter fichier.pdf</span><a class="btn btn-delete">Delete</a></div>
                                                        </div>--}}
                                                        <div class="col-lg-12">
                                                            <div class="form-group mt-10">
                                                                <button class="btn btn-default btn-brand icon-tick">Ajouter nouvelle offre</button>
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
