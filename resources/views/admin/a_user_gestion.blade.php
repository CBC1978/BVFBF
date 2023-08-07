@extends('layouts.admin')
@section('content')
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
                <!--autres champs -->
            </div>
            <div class="col-md-3">
                <!-- autres champs -->
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary mt-4">Filtrer</button>
            </div>
        </form>
    </div>


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

    <table class="table table-dark table-striped" id="user-table">
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
                        // Mettre à jour les statuts affichés dans le tableau
                        updateStatuses(response.updatedStatuses);
                        // Vider les cases à cocher
                        $('input[name="selected_users[]"]:checked').prop('checked', false);
                        
                        // Utiliser SweetAlert2 pour afficher un popup de succès
                        Swal.fire({
                            icon: 'success',
                            title: 'Succès',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 1500 // Temps d'affichage du popup en ms
                        }).then(() => {
                            // Actualiser la page après la fermeture du popup
                            location.reload();
                        });
                    },
                    error: function(response) {
                        // En cas d'erreur, afficher un message d'erreur
                        alert('Une erreur s\'est produite lors de la mise à jour des statuts.');
                    }
                });
            }
        });

        function updateStatuses(updatedStatuses) {
            $.each(updatedStatuses, function(userId, newStatus) {
                var statusContainer = $('.status-container[data-user-id="' + userId + '"]');
                statusContainer.find('.status-label').text(newStatus);
            });
        }
        
    });
</script>




@endsection
