@extends('layouts.admin')
@section('content')
<div class="box-content">
    <h2>Ajouter une entreprise de transporteur</h2>
    <form action="{{ route('admin.ajouter-transporteur') }}" method="post" id="transporteur-form">
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
    <form action="{{ route('admin.ajouter-expediteur') }}" method="post" id="expediteur-form">
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

<!-- Code JavaScript pour afficher une fenêtre contextuelle de résultat de validation -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Attache des écouteurs d'événements aux formulaires
    document.getElementById('transporteur-form').addEventListener('submit', traiterSoumissionFormulaire);
    document.getElementById('expediteur-form').addEventListener('submit', traiterSoumissionFormulaire);

    function traiterSoumissionFormulaire(event) {
        event.preventDefault(); // Empêche la soumission par défaut du formulaire

        const formulaire = event.target;

        // Simuler la soumission du formulaire ou effectuer une requête AJAX
        //  j'utilise un setTimeout pour simuler la soumission
        setTimeout(() => {
            const isSuccess = Math.random() < 0.8; // Simule 80% de succès

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
