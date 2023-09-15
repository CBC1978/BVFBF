@extends('layouts.carrier')

@section('content')

<div class="box-content">
    <div class="box-heading">
        <div class="box-title">
            <h3 class="mb-35">Mes demandes </h3>
        </div>
        <div class="box-breadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li><a class="icon-home" href="index.html">Dashboard</a></li>
                    <li><span>Mes demandes</span></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
           
    <thead>
        <tr>
            <th>Numéro</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Statut</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($offers as $key => $offer)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $offer->price }}</td>
                <td>{{ $offer->description }}</td>
                <td>
                    @if($offer->status == 0)
                        En attente
                    @elseif($offer->status == 1)
                        Accepté
                    @else
                        Refusé
                    @endif
                </td>
           
            </tr>
        @endforeach
    </tbody>
</table>

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

@endsection