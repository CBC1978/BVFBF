@extends('layouts.carrier')

@section('content')
    <h1>Mes annonces de transport</h1>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Annonce ID</th>
                    <th>Origine</th>
                    <th>Destination</th>
                    <th>Date limite</th>
                    <th>Type de véhicule</th>
                    <th>Poids</th>
                    <th>Description</th>
                    <th>Offres</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userAnnouncements as $announcement)
                    <tr>
                        <td>{{ $announcement->id }}</td>
                        <td>{{ $announcement->origin }}</td>
                        <td>{{ $announcement->destination }}</td>
                        <td>{{ $announcement->limit_date }}</td>
                        <td>{{ $announcement->vehicule_type }}</td>
                        <td>{{ $announcement->weight }}</td>
                        <td>{{ $announcement->description }}</td>
                        <td>
                            {{-- @if ($announcement->offers->count() > 0)
                                <ul>
                                    @foreach ($announcement->offers as $offer)
                                        <li>
                                            Offre de {{ $offer->sender_name }}: {{ $offer->amount }}
                                            <form method="post" action="{{ route('handle.offer', ['offerId' => $offer->id]) }}">
                                                @csrf
                                                <button type="submit" name="action" value="accept">Accepter</button>
                                                <button type="submit" name="action" value="refuse">Refuser</button>
                                            </form>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                Aucune offre pour le moment.
                            @endif --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
