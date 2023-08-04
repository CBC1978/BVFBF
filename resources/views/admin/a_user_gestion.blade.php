@extends('layouts.admin')

@section('content')
    <!-- Vérifier si l'utilisateur est connecté en tant qu'administrateur -->
    {{-- @if(Auth::check() && Auth::user()->role === 'admin') --}}
        <div class="box-content">
            <div class="box-content">
                <form action="{{ route('filter_users') }}" method="GET" class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="status">Filtrer par statut:</label>
                            <select class="form-control" name="status" id="status">
                                <option value="">Tous</option>
                                <option value="0">Base</option>
                                <option value="1">En cours de validation</option>
                                <option value="2">Validé</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Ajouter d'autres champs de filtre ici si nécessaire -->
                    </div>
                    <div class="col-md-3">
                        <!-- Ajouter d'autres champs de filtre ici si nécessaire -->
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary mt-4">Filtrer</button>
                    </div>
                </form>
            </div>
            

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form method="POST" action="{{ route('update_user_status', $user->id) }}">
                                    @csrf
                                    <select class="form-control" name="status">
                                        <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Base</option>
                                        <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>En cours de validation</option>
                                        <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Validé</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </form>
                            </td>
                            <td>
                                <!-- ajouter ici d'autres actions si besoin -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    {{-- @else --}}
        {{-- <p>Vous n'avez pas les droits d'accéder à cette page.</p> --}}
    {{-- @endif --}}
@endsection
