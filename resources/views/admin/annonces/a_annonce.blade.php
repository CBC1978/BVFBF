@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Annonces de Fret</h1>
        
        <!-- Formulaire de filtrage par status -->
        <form action="{{ route('annonces.filtrer') }}" method="post">
            @csrf
            @method('PUT')
            <label for="status">Filtrer par status :</label>
            <select name="status" id="status">
                <option value="en_attente">En Attente</option>
                <option value="approuve">Approuvé</option>
                <option value="rejete">Rejeté</option>
            </select>
            <button type="submit">Filtrer</button>
        </form>
        
        <!-- Tableau des annonces -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chargeurAnnonces as $annonce)
                    <tr>
                        <td>{{ $annonce->id }}</td>
                        <td>Chargeur</td>
                        <td>{{ $annonce->status }}</td>
                        <td>
                            <a href="{{ route('annonces.update', $annonce->id) }}">Mettre à jour</a>
                        </td>
                    </tr>
                @endforeach

                @foreach($transporteurAnnonces as $annonce)
                    <tr>
                        <td>{{ $annonce->id }}</td>
                        <td>Transporteur</td>
                        <td>{{ $annonce->status }}</td>
                        <td>
                            <a href="{{ route('annonces.update1', $annonce->id) }}">Mettre à jour</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<style>
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

select {
    padding: 5px;
}

button {
    padding: 5px 10px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

a {
    color: #007bff;
    text-decoration: none;
}

</style>
@endsection
