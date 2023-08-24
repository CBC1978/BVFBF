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
</div>






@endsection

