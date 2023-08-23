@extends('layouts.admin')

@section('content')
<div class="box-content">
   
    
    <div id="forms-container" >
        <div class="row">
            <strong class="color-brand-1">
                @if(Session::has('username'))
                    <p>{{ Session::get('username') }}</p>
                @endif
            </strong>
            <strong class="color-brand-1">
                @if(Session::has('userId'))
                    <p>{{ Session::get('userId') }}</p>
                @endif
            </strong>
            <div class="col-md-6"> 
                <h2>Ajouter une entreprise de transporteur</h2>
                <form action="{{ route('admin.ajouter-transporteur') }}" method="post" id="transporteur-form">
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
                    <input type="hidden" name="user_id" value="{{ Session::get('userId') }}">
                    
                    <button type="submit">Ajouter Transporteur</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Ajouter une entreprise expéditrice</h2>
                <form action="{{ route('admin.ajouter-expediteur') }}" method="post" id="expediteur-form">
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
                    <input type="hidden" name="user_id" value="{{ Session::get('userId') }}">
                    
                    <button type="submit">Ajouter Expéditeur</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('layouts.admin')

@section('content')
<div class="box-content">
    <button id="toggle-forms-btn" class="btn btn-primary">Afficher les formulaires</button>
    
    <div id="forms-container" style="display: none;">
        <div class="row">
            <div class="col-md-6"> 
                <h2>Ajouter une entreprise de transporteur</h2>
                <form action="{{ route('admin.ajouter-transporteur') }}" method="post" id="transporteur-form">
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
                    
                    
                    <button type="submit">Ajouter Transporteur</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Ajouter une entreprise expéditrice</h2>
                <form action="{{ route('admin.ajouter-expediteur') }}" method="post" id="expediteur-form">
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
                    
                    
                    <button type="submit">Ajouter Expéditeur</button>
                </form>
            </div>
        </div>
    </div>
</div>
 --}}

{{-- 

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
 //Code JavaScript pour afficher/cacher les formulaires
     document.getElementById('toggle-forms-btn').addEventListener('click', () => {
        const formsContainer = document.getElementById('forms-container');
        formsContainer.style.display = formsContainer.style.display === 'none' ? 'block' : 'none';
    });

    // Connecte des écouteurs d'événements aux formulaires
    document.getElementById('transporteur-form').addEventListener('submit', function() {
        afficherNotification('Succès', 'L\'entreprise a été enregistrée avec succès.', 'success');
        viderChampsFormulaire('transporteur-form');
    });

    document.getElementById('expediteur-form').addEventListener('submit', function() {
        afficherNotification('Succès', 'L\'entreprise a été enregistrée avec succès.', 'success');
        viderChampsFormulaire('expediteur-form');
    });

    function afficherNotification(titre, message, type) {
        Swal.fire({
            icon: type,
            title: titre,
            text: message,
            showConfirmButton: false,
            timer: 2000 // Durée d'affichage de la notification en ms
        });
    }

    function viderChampsFormulaire(formId) {
        document.getElementById(formId).reset();
    }
</script>



@endsection --}}
