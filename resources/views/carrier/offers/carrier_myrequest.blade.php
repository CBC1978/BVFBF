@extends('layouts.carrier')

@section('content')

<div class="box-content">
    <div class="box-heading">
        <div class="box-title">
            <h3 class="mb-35">Mes demandes</h3>
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
        <table class="table table-responsive table-striped table-hover" id="requestTable">
            <thead>
                <tr>
                    <th scope="col">Numéro</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Description</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                    <th>Messagerie</th>
                </tr>
            </thead>
            <tbody>
                @foreach($offers->sortByDesc('id') as $key => $offer)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $offer->price }}</td>
                        <td>{{ $offer->description }}</td>
                        <td>
                            @if($offer->status == 0)
                            <button type="button" class="btn btn-primary "> En attente </button>
                            @elseif($offer->status == 1)
                            <button type="button" class="btn btn-success ">  Accepter </button>
                            @else
                            <button type="button" class="btn btn-danger ">Refusé </button>
                            @endif
                        </td>
                        <td>
                            @if($offer->status == 1)
                                <a
                                 href="{{ route('c_contract', ['id' => $offer->id]) }}"
                                 class="btn btn-primary">Generer le contrat</a>
                            @endif
                        </td>
                        <td>

                            {{-- @if($offer->status => 1) --}}

                            <a href="{{ route('shipper-reply-chat', ['offer_id' => $offer->id]) }}" class="btn btn-tag btn-info">Echanger</a>
                            {{-- @endif --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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

@endsection

@section('script')
    <script>
        new DataTable('#requestTable', {
            responsive:true,
            "ordering": true,
            language:{
                "decimal":        "",
                "emptyTable":     "Pas de données disponible",
                "info":           "Affichage _START_ sur _END_ de _TOTAL_ éléments",
                "infoEmpty":      "Affichage 0 sur 0 de 0 entries",
                "infoFiltered":   "(filtrage de _MAX_ total éléments)",
                "infoPostFix":    "",
                "thousands":      ",",
                "lengthMenu":     "Afficher _MENU_ éléments",
                "loadingRecords": "Chargement...",
                "processing":     "",
                "search":         "Recherche:",
                "zeroRecords":    "Pas de correspondance trouvé",
                "paginate": {
                    "first":      "Premier",
                    "last":       "Dernier",
                    "next":       "Suivant",
                    "previous":   "Précédent"
                },
            }
        } );

    </script>

@endsection
