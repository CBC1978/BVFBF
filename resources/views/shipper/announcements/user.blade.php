@extends('layouts.shipper')

@section('content')
    <div class="box-heading">
        <div class="box-title">
            <h3 class="mb-3">Mes annonces de fret</h3>
        </div>
        <div class="box-breadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li> <a class="icon-home" href="#">Tableau de bord</a></li>
                    <li><span>Mes annonces</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($announces as $announce)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><button type="button" class="btn btn-success ">Offres 45</button></div>
                        <div class="right-info"><a class="name-job{{ request()->routeIs('c_offerdetail') ? 'active' : '' }}"  href="{{ route('c_offerdetail') }}"></a>
                        </div>
                    </div>
                    <div class="card-block-info">
                        <h6><a href="">{{ucfirst($announce['origin'])}}-{{ucfirst($announce['destination'])}}</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Date d'expiration:</span><span class="card-time">{{ date("d/m/Y",strtotime($announce['limit_date'])) }}</span></div>
                        <p class="font-sm color-text-paragraph mt-15">{{$announce['description']}}</p>
                        <div class="mt-30"><a class="btn btn-grey-small mr-5" href="">10 T</a><a class="btn btn-grey-small mr-5" href="">20 m3</a>
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
        @endforeach
    </div>

@endsection
