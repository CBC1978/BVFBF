@extends('layouts.admin')

@section('content')
    <div class="box-content">
        <div class="box-heading">
            <div class="box-title">
                <h3 class="mb-35">Gestion des utilisateurs</h3>
            </div>
            <div class="box-breadcrumb">
                <div class="breadcrumbs">
                    <ul>
                        <li><a class="icon-home" href="index.html">Admin</a></li>
                        <li><span>Gestion des utilisateurs</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Ajouter le jeton CSRF pour la protection des requêtes AJAX -->
    @csrf

    <div class="mt-10">
        <div class="section-box">
            <div class="container">
                <div class="panel-white pt-30 pb-30 pl-15 pr-15">
                    <table id="users-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Status</th>
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
                                        <!-- Affiche le statut et permet la modification -->
                                        <select class="form-control" name="status" data-user-id="{{ $user->id }}">
                                            <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Base</option>
                                            <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>En cours de validation</option>
                                            <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Validé</option>
                                        </select>
                                    </td>
                                    <td>
                                        <!-- Bouton pour enregistrer le changement de statut -->
                                        <button class="btn btn-primary btn-save-status">Enregistrer</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Mettre à jour la section 'scripts' pour inclure le code JavaScript -->
    @section('scripts')
        <script>
            $(document).ready(function() {
                // Initialiser le Datatable
                $('#users-table').DataTable();

                // Gérer le clic sur le bouton d'enregistrement du statut
                $('.btn-save-status').on('click', function() {
                    var userId = $(this).closest('tr').find('[data-user-id]').data('user-id');
                    var newStatus = $(this).closest('tr').find('select[name="status"]').val();

                    // Envoyer la requête AJAX pour enregistrer le nouveau statut
                    $.ajax({
                        url: '/admin/update-user-status',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            user_id: userId,
                            status: newStatus
                        },
                        success: function(response) {
                            // Mettre à jour l'affichage du statut si nécessaire
                            alert('Statut enregistré avec succès !');
                        },
                        error: function(xhr, status, error) {
                            // Gérer les erreurs éventuelles
                            alert('Une erreur est survenue lors de l\'enregistrement du statut.');
                        }
                    });
                });
            });
        </script>
    @endsection

@endsection
