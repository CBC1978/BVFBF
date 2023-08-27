@extends('layouts.carrier')

@section('content')
    <div class="box-heading">
        <div class="box-title">
            <h3 class="mb-3">Mes annonces de transport</h3>
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
                        <h6><a href="offer-details.html">{{ucfirst($announce['origin'])}}-{{ucfirst($announce['destination'])}}</a></h6>
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

{{--            <div class="modal fade" id="ModalApplyJobForm{{$announce->id}}" tabindex="-1" aria-hidden="true">--}}
{{--                <div class="modal-dialog modal-lg">--}}
{{--                    <div class="modal-content apply-job-form">--}}
{{--                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                        <div class="modal-body pl-30 pr-30 pt-50">--}}
{{--                            <div class="text-center">--}}
{{--                                <p class="font-sm text-brand-2">POSTULER A L'OFFRE </p>--}}
{{--                                <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Faites une proposition</h2>--}}
{{--                                <p class="font-sm text-muted mb-30">Entrer les des information clair et valide pour multiplier vos chances</p>--}}
{{--                            </div>--}}
{{--                            <form class="login-register text-start mt-20 pb-30" action="{{ route('carrier.announcements.postuler') }}"  method="post" id="formPostuler">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="form-label" for="prix">Prix *</label>--}}
{{--                                    <input class="form-control" type="number" name="price" id="price" placeholder="votre meilleur offre">--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label class="form-label" for="description">Description</label>--}}
{{--                                    <input class="form-control" id="description" type="text" required="" name="description" placeholder="description...">--}}
{{--                                    <input class="form-control" id="idUser" name="idUser" value="{{session('userId') }}" type="hidden">--}}
{{--                                    <input class="form-control" id="announce" name="announce" value="{{ $announce->id }}" type="hidden">--}}
{{--                                </div>--}}
{{--                                <div class="login_footer form-group d-flex justify-content-between">--}}
{{--                                    <label class="cb-container">--}}
{{--                                        <input type="checkbox"><span class="text-small">Conditions generales d'utilisation</span><span class="checkmark"></span>--}}
{{--                                    </label><a class="text-muted" href="page-contact.html">En savoir plus</a>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <button class="btn btn-default hover-up w-100" type="submit" name="login">ENVOYER</button>--}}
{{--                                </div>--}}
{{--                                <div class="text-muted text-center">Avez vous besoin d'aides? <a href="page-contact.html">Contactez nous </a></div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        @endforeach
    </div>

{{--    <div class="row">--}}
{{--        <div class="col-lg-12">--}}
{{--    <div class="container">--}}
{{--        <table class="data-table table table-responsive table-striped">--}}
{{--            <thead>--}}
{{--                <tr>--}}
{{--                    <th>#</th>--}}
{{--                    <th>Origine</th>--}}
{{--                    <th>Destination</th>--}}
{{--                    <th>Description</th>--}}
{{--                    <th>Offres</th>--}}
{{--                </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--                @php--}}
{{--                $i =1 ;--}}
{{--                @endphp--}}
{{--                @foreach ($announces as $announce)--}}

{{--                    <tr>--}}
{{--                        <td> {{ $i }}</td>--}}
{{--                        <td>{{ $announce['origin'] }}</td>--}}
{{--                        <td>{{ $announce['destination'] }}</td>--}}
{{--                        <td>{{ $announce['description'] }}</td>--}}
{{--                        <td>--}}
{{--                            @if($announce['offre'] != 0)--}}
{{--                                <button class="btn btn-success"> <span class="badge badge-success">{{$announce['offre']}}</span></button>--}}
{{--                            @else--}}
{{--                               <button class="btn btn-danger"> <span class="badge badge-warning">0</span></button>--}}
{{--                            @endif--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    @php--}}
{{--                        $i++ ;--}}
{{--                    @endphp--}}
{{--                @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
@endsection
