@extends('layouts.admin')

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


@endsection
