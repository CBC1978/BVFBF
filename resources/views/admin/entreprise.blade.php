@extends('layouts.admin')

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

<!-- Code JavaScript pour afficher/cacher les formulaires -->
<script>
    document.getElementById('toggle-forms-btn').addEventListener('click', () => {
        const formsContainer = document.getElementById('forms-container');
        formsContainer.style.display = formsContainer.style.display === 'none' ? 'block' : 'none';
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Connecte des écouteurs d'événements aux formulaires
    document.getElementById('transporteur-form').addEventListener('submit', traiterSoumissionFormulaire);
    document.getElementById('expediteur-form').addEventListener('submit', traiterSoumissionFormulaire);

    function traiterSoumissionFormulaire(event) {
        event.preventDefault(); // Empêche la soumission par défaut du formulaire

        const formulaire = event.target;

        setTimeout(() => {
            const isSuccess = Math.random() < 0.8;

            if (isSuccess) {
                afficherNotification('Succès', 'L\'entreprise a été enregistrée avec succès.', 'success');
                formulaire.reset(); // Réinitialise le formulaire en cas de succès
            } else {
                afficherNotification('Erreur', 'Échec de l\'enregistrement de l\'entreprise.', 'error');
            }
        }, 1000); // Simule un délai de 1 seconde
    }

    function afficherNotification(titre, message, type) {
        Swal.fire({
            icon: type,
            title: titre,
            text: message,
            showConfirmButton: false,
            timer: 2000 // Durée d'affichage de la notification en ms
        });
    }
</script>
@endsection
