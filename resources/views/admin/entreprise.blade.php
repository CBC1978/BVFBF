@extends('layouts.admin')

@section('content')
<div class="box-content">
    <div id="forms-container">
        <div class="row">
            <div class="col-md-6">
                <h2>Ajouter une entreprise de transporteur</h2>
                <form action="{{ route('admin.ajouter-transporteur') }}" method="post">
                    @csrf
                    <label for="company_name">Nom de l'entreprise</label>
                    <input type="text" name="company_name" required>
                    
                    <label for="address">Adresse</label>
                    <input type="text" name="address" required>
                    
                    <label for="phone">Téléphone</label>
                    <input type="text" name="phone" required>

                    <label for="city">Ville</label>
                    <input type="text" name="city" required>
                    
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                    
                    <label for="ifu">Numéro IFU</label>
                    <input type="text" name="ifu" required>
                    
                    <label for="rccm">RCCM</label>
                    <input type="text" name="rccm" required>
                    
                    <!-- Champ caché pour stocker l'ID de l'utilisateur -->
                    <input type="hidden" name="user_id" value="{{ Session::get('userId') }}">
                    
                    <button type="submit">Ajouter Transporteur</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Ajouter une entreprise expéditrice</h2>
                <form action="{{ route('admin.ajouter-expediteur') }}" method="post">
                    @csrf
                    <label for="company_name">Nom de l'entreprise</label>
                    <input type="text" name="company_name" required>
                    
                    <label for="address">Adresse</label>
                    <input type="text" name="address" required>
                    
                    <label for="phone">Téléphone</label>
                    <input type="text" name="phone" required>

                    <label for="city">Ville</label>
                    <input type="text" name="city" required>
                    
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                    
                    <label for="ifu">Numéro IFU</label>
                    <input type="text" name="ifu" required>
                    
                    <label for="rccm">RCCM</label>
                    <input type="text" name="rccm" required>
                    
                    <!-- Champ caché pour stocker l'ID de l'utilisateur -->
                    <input type="hidden" name="user_id" value="{{ Session::get('userId') }}">
                    
                    <button type="submit">Ajouter Expéditeur</button>
                </form>
            </div>
        </div>
    </div>




<div class="box-content">
    <div class="row mt-10">
        <div class="col-md-12">
            <h2>Assigner des entreprises aux utilisateurs</h2>
            <form id="assign-user-form" action="{{ route('admin.assigner-entreprise-user') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="carrier_id">Assigner une entreprise transporteur :</label>
                    <select class="form-control" id="carrier_id" name="carrier_id">
                        <option value="">Sélectionner une entreprise transporteur</option>
                        @foreach ($carriers as $carrier)
                            <option value="{{ $carrier->id }}">{{ $carrier->company_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="shipper_id">Assigner une entreprise expéditrice :</label>
                    <select class="form-control" id="shipper_id" name="shipper_id">
                        <option value="">Sélectionner une entreprise expéditrice</option>
                        @foreach ($shippers as $shipper)
                            <option value="{{ $shipper->id }}">{{ $shipper->company_name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Assigner Entreprises aux Utilisateurs Sélectionnés</button>
            
        </div>
    </div>
    <div class="row mt-10">
        <div class="col-md-12">
           
                @csrf
                <table class="table table-dark table-striped" id="user-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><input type="checkbox" class="user-checkbox" name="selected_users[]" value="{{ $user->id }}">
                                    <input type="hidden" name="user_ids[]" value="{{ $user->id }}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
               
            </form>
        </div>
    </div>
</div>


@endsection