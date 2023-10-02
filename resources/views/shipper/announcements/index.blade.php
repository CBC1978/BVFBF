@extends('layouts.carrier')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="section-box">
            <div class="container">
                <div class="panel-white mb-30">
                    <div class="box-padding">
                        <div class="box-filters-job">
                            <div class="row">
                                <div class="box-title">
                                    <h3 class="mb-35">Annonce de Fret</h3>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($announcements as $announce)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <div class="card-grid-2 hover-up">
                                            <div class="card-grid-2-image-left"><span class="flash"></span>
                                                <div class="image-box"><img src=" {{ asset('imgs/brands/brand-1.png') }}" alt="jobBox"></div>
                                                <div class="right-info"><a class="name-job" href="{{ route('carrier.announcements.show', ['id' => $announce->id]) }}">{{ $announce->company_name }}</a>
                                                    {{-- <span class="location-small">New York, US</span> --}}
                                                </div>
                                            </div>
                                            <div class="card-block-info">
                                                <h6><a href="">{{ucfirst($announce->origin)}}-{{ucfirst($announce->destination)}}</a></h6>
                                                <div class="mt-5"><span class="card-briefcase">Date d'expiration:</span><span class="card-time">{{ date("d/m/Y",strtotime($announce->limit_date)) }}</span></div>
                                                <p class="font-sm color-text-paragraph mt-15">{{$announce->description}}</p>
                                                <div class="mt-30"><a class="btn btn-grey-small mr-5" href="">{{$announce->weight}} T</a></div>
                                                <div class="card-2-bottom mt-30">
                                                    <div class="row">
                                                       <div class="col-lg-7 col-7"><span class="card-text-price">{{ $announce->price }}FCFA</span><span class="text-muted"></span></div> 
                                                        <div class="col-lg-5 col-5 text-end">
                                                            <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm{{$announce->id}}">Postuler</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="ModalApplyJobForm{{$announce->id}}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content apply-job-form">
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="modal-body pl-30 pr-30 pt-50">
                                                    <div class="text-center">
                                                        <p class="font-sm text-brand-2">POSTULER A L'ANNONCE </p>
                                                        <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Faites une proposition</h2>
                                                        <p class="font-sm text-muted mb-30">Entrer les des information clair et valide pour multiplier vos chances</p>
                                                    </div>

                                                    <form class="login-register text-start mt-20 pb-30" action="{{ route('carrier.announcements.postuler') }}"  method="post" id="formPostuler">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="form-label" for="prix">Prix <span class="required">*</span></label>
                                                            <input class="form-control" type="number" name="price" id="price" placeholder="votre meilleur offre">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="prix">Poids <span class="required">*</span></label>
                                                            <input class="form-control" type="number" name="weight" id="weight" placeholder="Le poids approximatif">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label" for="description">Description<span class="required">*</span></label>
                                                            <input class="form-control" id="description" type="text" required="" name="description" placeholder="description...">
                                                            <input class="form-control" id="idUser" name="idUser" value="{{session('userId') }}" type="hidden">
                                                            <input class="form-control" id="announce" name="announce" value="{{ $announce->id }}" type="hidden">
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-default hover-up w-100" type="submit" name="login">ENVOYER</button>
                                                        </div>
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
</div>
<style>
    .required {
        color: red;
        margin-left: 4px; /* Espacement entre le texte et l'étoile */
    }

</style>

@endsection
