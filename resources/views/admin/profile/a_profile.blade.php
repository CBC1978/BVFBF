@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carrier-profil</title>
</head>
<body>
    <div class="container2">
        <h1>  {{ $user->username}} Profile</h1>
        <div class="affichage">
            <ul>
                <li>username: {{$user->name}}</li>
                <li>first name: {{$user->first_name }}</li>
                <li>username: {{ $user->username}}</li>
                <li>contact: {{$user->user_phone }}</li>
                <li>MAIl: {{$user->email }}</li>
                <li>code: {{$user->code}}</li>
                <li>company name:  @if ($user->fk_carrier_id)
                                {{ $user->carrier->company_name }}
                            @else
                                Aucune entreprise associée
                            @endif
                </li>
            </ul>
        <a href="{{ route('admin.profile.affichage') }}"><button type="submit">Refresh</button></a>
        </div>

        <a id="edit-profile-button" href="#">Edit Profile</a>

        <div id="edit-profile-form" style="display: none;">
            <form id="update-profile-form" method="get" action="{{ route('admin.profile.update') }}">
                @csrf
                @method('get')

                <input type="text" name="name" value="{{$user->name}}">
                <input type="text" name="first_name" value="{{$user->first_name }}">
                <input type="tel" name="user_phone" value="{{$user->user_phone }}">
                <input type="email" name="email" value="{{ $user->username}}">
                <input type="text" name="code" value="{{$user->code}}">
                <input type="text" name="status" value="{{$user->role}}">
                <button type="submit">Update Profile</button>
            </form>
        </div>
    </div>

<style>
  /* Style pour le conteneur principal */
.container2 {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Style pour l'en-tête du profil */
h1 {
    font-size: 36px;
    color: #333;
    margin-bottom: 20px;
}

/* Style pour les informations du profil */
ul {
    list-style-type: none;
    padding: 0;
}

li {
    font-size: 18px;
    color: #555;
    margin-bottom: 10px;
}

/* Style pour le bouton "Edit Profile" */
#edit-profile-button {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    display: inline-block;
    transition: background-color 0.3s ease;
}

#edit-profile-button:hover {
    background-color: #0056b3;
}

/* Style pour le formulaire de mise à jour du profil */
#edit-profile-form {
    display: none;
    margin-top: 20px;
    text-align: left;
}

/* Style pour les champs du formulaire */
input[type="text"],
input[type="tel"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style pour le bouton de mise à jour du profil */
button[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Style pour le lien "Refresh" */
a[href="#"] {
    text-decoration: none;
    color: #007BFF;
    margin-left: 10px;
    transition: color 0.3s ease;
}

a[href="#"]:hover {
    color: #0056b3;
}

</style>




</body>
</html>
@endsection