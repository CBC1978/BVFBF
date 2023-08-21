@extends('layouts.shipper')

@section('content')
    <h1>Mes annonces de fret</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Annonce ID</th>
                    <th>Origine</th>
                    <th>Destination</th>
                    <th>Date limite</th>
                    <th>Poids</th>
                    <th>Volume</th>
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
                        <td>{{ $announcement->weight }}</td>
                        <td>{{ $announcement->volume }}</td>
                        <td>{{ $announcement->description }}</td>
                        <td>
                            <ul>
                                {{-- @foreach ($announcement->offers as $offer)
                                    <li>
                                        Offre de {{ $offer->sender_name }}: {{ $offer->amount }}
                                        <form method="post" action="{{ route('shipper.handle.offer', ['offerId' => $offer->id]) }}">
                                            @csrf
                                            <button type="submit" name="action" value="accept">Accepter</button>
                                            <button type="submit" name="action" value="refuse">Refuser</button>
                                        </form>
                                    </li>
                                @endforeach --}}
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
