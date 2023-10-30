@extends('layouts.shipper')

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

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-hover" id="requestTable">
                        <thead>
                        <tr>
                            <th scope="col">Numéro</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Description</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Notification</th>
                            <th scope="col">Messagerie</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($offers->sortByDesc('id') as $key => $offer )
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
                                    {{-- Vérifiez la valeur de status_message pour décider d'afficher la notification --}}
                                    @if($offer->status_message == 0)
                                        Aucune notification
                                    @elseif($offer->status_message == 1)
                                        Vous avez un message
                                    @elseif($offer->status_message == 3)
                                        Message lu
                                    @endif
                                </td>
                                <td>
                                    {{-- Vérifiez si status_message est égal à 2 avant d'afficher le bouton Echanger --}}
                                    @if($offer->status_message == 1 || $offer->status_message == 3)
                                        <a href="{{ route('carrier-reply-chat', ['offer_id' => $offer->id]) }}" class="btn btn-tag btn-info">Echanger</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        <!-- Affichage de la pagination -->

                        {{ $offers->links('pagination::bootstrap-4') }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        new DataTable('#requestTable', {
            responsive:true,
            "ordering": false,
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

