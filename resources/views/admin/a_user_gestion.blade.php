@extends('layouts.admin')
@section('content')
<div class="box-content">
    <form id="status-form">
        <div class="mb-3">
            <select class="form-control" id="bulk-status">
                <option value="0">Base</option>
                <option value="1">En cours de validation</option>
                <option value="2">Validé</option>
            </select>
            <button type="button" class="btn btn-primary" id="bulk-update">Modifier le statut</button>
        </div>
    </form>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Statut</th>
                <th>Cochez</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <div class="status-container" data-user-id="{{ $user->id }}">
                        <span class="status-label">{{ $user->status }}</span>
                    </div>
                </td>
                <td><input type="checkbox" class="user-checkbox" name="selected_users[]" value="{{ $user->id }}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#bulk-update').click(function() {
            var selectedStatus = $('#bulk-status').val();
            var selectedUserIds = $('input[name="selected_users[]"]:checked').map(function() {
                return $(this).val();
            }).get();

            if (selectedUserIds.length > 0) {
                $.ajax({
                    method: 'POST',
                    url: '/bulk_update_status',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: selectedStatus,
                        user_ids: selectedUserIds
                    },
                    success: function(response) {
                        // Mettre à jour les statuts affichés si nécessaire
                        // Afficher un message de succès
                        alert(response.message);
                    },
                    error: function(response) {
                        // En cas d'erreur, afficher un message d'erreur
                        alert('Une erreur s\'est produite lors de la mise à jour des statuts.');
                    }
                });
            }
        });
    });
</script>
{{-- 
@section('content')
<div class="box-content">
   
</div>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Statut</th>
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
                <div class="status-container" data-user-id="{{ $user->id }}">
                    <select class="form-control status-select">
                        <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Base</option>
                        <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>En cours de validation</option>
                        <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Validé</option>
                    </select>
                    <button class="btn btn-primary update-status">Enregistrer</button>
                </div>
            </td>
            <td>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<script>
    $(document).ready(function() {
        $('.update-status').click(function() {
            var userId = $(this).closest('.status-container').data('user-id');
            var newStatus = $(this).siblings('.status-select').val();

            $.ajax({
                method: 'POST',
                url: '/update_user_status/' + userId,
                data: {
                    _token: '{{ csrf_token() }}',
                    status: newStatus
                },
                success: function(response) {
                    // on affiche un popup SweetAlert2 pour informer l'utilisateur
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès',
                        text: response.message,
                        confirmButtonText: 'OK'
                    });
                },
                error: function(response) {
                    // En cas d'erreur, on affiche un popup d'erreur
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: 'Une erreur s\'est produite lors de la mise à jour du statut.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>
 --}}

@endsection
