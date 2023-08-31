@extends('layouts.shipper')

@section('content')
<div class="box-content">
    <div class="box-heading">
        <div class="box-title">
            <h3 class="mb-35">Ajouter une Annonce de Fret</h3>
        </div>
        <div class="box-breadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li><a class="icon-home" href="index.html">Annonce de Fret</a></li>
                    <li><span>Ajouter une Annonce de Fret</span></li>
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
                                            <div class="row mt-30">
                                                <div class="col-lg-9">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h5 class="icon-edu">Fait une Annonce de Fret</h5>
                                                            <form method="POST" action="{{ route('shipper.announcements.store') }}">
                                                                @csrf
                                                                
                                                                <input type="hidden" name="user_id" value="{{ session('userId') }}">
                                                                <input type="hidden" name="fk_carrier_id" value="{{ session('fk_shipper_id') }}">
                                                            
                                                             
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-30">
                                                                            <label for="origin">Lieu de départ</label>
                                                                            <select id="origin" class="form-control @error('origin') is-invalid @enderror" name="origin" required>
                                                                                <option value="">Sélectionnez un lieu</option>
                                                                                <option value="Po">Po</option>
                                                                                <option value="Bobo">Bobo</option>
                                                                            </select>
                                                                            @error('origin')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-30">
                                                                            <label for="destination">Lieu de destination</label>
                                                                            <select id="destination" class="form-control @error('destination') is-invalid @enderror" name="destination" required>
                                                                                <option value="">Sélectionnez un lieu</option>
                                                                                <option value="Ouaga">Ouaga</option>
                                                                                <option value="Koudougou">Koudougou</option>
                                                                            </select>
                                                                            @error('destination')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-30">
                                                                            <label for="limit_date">Date limite</label>
                                                                            <input type="date" id="limit_date" class="form-control @error('limit_date') is-invalid @enderror" name="limit_date" value="{{ old('limit_date') }}" required>
                                                                            @error('limit_date')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-30">
                                                                            <label for="weight">Poids</label>
                                                                            <input type="text" id="weight" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight') }}">
                                                                            @error('weight')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-30">
                                                                            <label for="volume">Volume</label>
                                                                            <input type="text" id="volume" class="form-control @error('volume') is-invalid @enderror" name="volume" value="{{ old('volume') }}">
                                                                            @error('volume')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <!-- Add more fields here if necessary -->
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <label for="description">Description</label>
                                                                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required>{{ old('description') }}</textarea>
                                                                    @error('description')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary">Ajouter l'annonce</button>
                                                                </div>
                                                            </form>
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


@endsection
