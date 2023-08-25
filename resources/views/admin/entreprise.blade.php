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


{{-- 

  
<div class="row mt-4">
    <div class="col-md-6">
        <h2>Assigner une entreprise à un utilisateur</h2>
        <form action="{{ route('admin.assigner-entreprise-user') }}" method="post">
            @csrf
            <label for="user_id">Utilisateur</label>
            <select name="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>

            <label for="entreprise_type">Type d'entreprise</label>
            <select name="entreprise_type" class="form-control">
                <option value="carrier">Transporteur</option>
                <option value="shipper">Expéditeur</option>
            </select>

            <label for="entreprise_id">Entreprise</label>
            <select name="entreprise_id" class="form-control">
                @foreach ($carriers as $carrier)
                    <option value="{{ $carrier->id }}">{{ $carrier->company_name }}</option>
                @endforeach
                @foreach ($shippers as $shipper)
                    <option value="{{ $shipper->id }}">{{ $shipper->company_name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Assigner Entreprise</button>
        </form>
    </div>
</div> --}}

000000000000000000000000000000000000
0000000000000000


00000000000000

00000000000000000000000000000000
{{-- <div class="row mt-10">
    <div class="col-md-6">
        <h2>Liste des utilisateurs</h2>
        <form id="assign-user-form" action="{{ route('admin.assigner-entreprise-user') }}" method="post">
            @csrf
            
            <!-- Champs de sélection pour entreprise transporteur -->
            <label for="carrier_id">Assigner une entreprise transporteur :</label>
            <select class="form-control" id="carrier_id" name="carrier_id">
                <option value="">Sélectionner une entreprise transporteur</option>
                @foreach ($carriers as $carrier)
                    <option value="{{ $carrier->id }}">{{ $carrier->company_name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mt-3" id="assign-carrier-button" >Assigner Transporteur</button>
            
            <!-- Champs de sélection pour entreprise expéditrice -->
            <label for="shipper_id">Assigner une entreprise expéditrice :</label>
            <select class="form-control" id="shipper_id" name="shipper_id">
                <option value="">Sélectionner une entreprise expéditrice</option>
                @foreach ($shippers as $shipper)
                    <option value="{{ $shipper->id }}">{{ $shipper->company_name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mt-3" id="assign-shipper-button" >Assigner Expéditeur</button>
        </form>
    </div>
    <table class="table table-dark table-striped" id="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Cochez</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><input type="checkbox" class="user-checkbox" name="selected_users[]" value="{{ $user->id }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div> --}}
<div class="box-content">
    <div class="row mt-10">
        <div class="col-md-12">
            <h2>Liste des utilisateurs</h2>
            <form id="assign-user-form" action="{{ route('admin.assigner-entreprise-user') }}" method="post">
                @csrf
                <table class="table table-dark table-striped" id="user-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Transporteur</th>
                            <th>Expéditeur</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <input type="checkbox" class="user-checkbox" name="selected_users[]" value="{{ $user->id }}">
                                    <select class="form-control" name="carrier_id[{{ $user->id }}]">
                                        <option value="">Sélectionner un transporteur</option>
                                        @foreach ($carriers as $carrier)
                                            <option value="{{ $carrier->id }}">{{ $carrier->company_name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="shipper_id[{{ $user->id }}]">
                                        <option value="">Sélectionner un expéditeur</option>
                                        @foreach ($shippers as $shipper)
                                            <option value="{{ $shipper->id }}">{{ $shipper->company_name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Assigner Entreprise</button>
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