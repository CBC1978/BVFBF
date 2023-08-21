@extends('layouts.admin')
@section('content')
<div class="box-content">
    <h2>Ajouter une entreprise de transporteur</h2>
    <form action="{{ route('admin.ajouter-transporteur') }}" method="post">
        @csrf
        <label for="company_name">Nom de l'entreprise</label>
        <input type="text" name="company_name" required>
        
        <label for="address">Adresse</label>
        <input type="text" name="address" required>
        
        <label for="phone">Téléphone</label>
        <input type="text" name="phone" required>
        
        <button type="submit">Ajouter Transporteur</button>
    </form>
    
    <h2>Ajouter une entreprise expéditrice</h2>
    <form action="{{ route('admin.ajouter-expediteur') }}" method="post">
        @csrf
        <label for="company_name">Nom de l'entreprise</label>
        <input type="text" name="company_name" required>
        
        <label for="address">Adresse</label>
        <input type="text" name="address" required>
        
        <label for="phone">Téléphone</label>
        <input type="text" name="phone" required>
        
        <button type="submit">Ajouter Expéditeur</button>
    </form>
</div>
@endsection
