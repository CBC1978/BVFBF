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
    <div class="container">
        <table class="data-table table table-responsive table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Origine</th>
                    <th>Destination</th>
                    <th>Description</th>
                    <th>Offres</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i =1 ;
                @endphp
                @foreach ($data as $announce)

                    <tr>
                        <td> {{ $i }}</td>
                        <td>{{ $announce['origin'] }}</td>
                        <td>{{ $announce['destination'] }}</td>
                        <td>{{ $announce['description'] }}</td>
                        <td>
                            @if($announce['offre'] != 0)
                                <button class="btn btn-success"> <span class="badge badge-success">{{$announce['offre']}}</span></button>
                            @else
                               <button class="btn btn-danger"> <span class="badge badge-warning">0</span></button>
                            @endif
                        </td>
                    </tr>
                    @php
                        $i++ ;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
