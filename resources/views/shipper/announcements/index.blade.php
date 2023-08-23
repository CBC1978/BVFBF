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
                                @foreach($announcements as $announcement)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-image-left">
                                            <span class="flash"></span>
                                            <div class="image-box">
                                                <img src="imgs/brands/brand-1.png" alt="jobBox">
                                            </div>
                                            <div class="right-info">
                                                <a class="name-job" href="{{ route('shipper.announcements.show', ['id' => $announcement->id]) }}">{{ $announcement->company_name }}</a>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <h6><a href="{{ route('shipper.announcements.show', ['id' => $announcement->id]) }}">{{ $announcement->destination }} - {{ $announcement->origin }}</a></h6>
                                            <div class="mt-5">
                                                <span class="card-briefcase">Datelimite :</span>
                                                <span class="card-time">{{ $announcement->limit_date }} jours</span>
                                            </div>
                                            <p class="font-sm color-text-paragraph mt-15">{{ $announcement->description }}</p>
                                            <div class="mt-30">
                                                <a class="btn btn-grey-small mr-5" href="">{{ $announcement->weight }} Tonnes</a>
                                                <a class="btn btn-grey-small mr-5" href="">{{ $announcement->volume }} m3</a>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    {{-- Voir la meilleur offer en temps reel
                                                        <div class="col-lg-7 col-7">
                                                        <span class="card-text-price">{{ $announcement->price }}</span><span class="text-muted">F</span>
                                                    </div> --}}
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
