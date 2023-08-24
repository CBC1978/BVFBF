@extends('layouts.admin')

@section('content')

    <div class="container">
        <h2>Éditer l'annonce</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.annonces.update1', $annonce->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="status">Statut</label>
                <input type="text" name="status" class="form-control" value="{{ $annonce->status }}">
            </div>

            <div class="form-group">
                <label for="admin_id">modifier par admin</label>
                <input type="text" name="admin_id" class="form-control" value="{{ $annonce->admin_id }}">
            </div>

            <div class="form-group">
                <label>Date de modification</label>
                <p>{{ $annonce->updated_at }}</p>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
