@extends('layouts.carrier')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carrier-profil</title>

</head>
<body>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <div class="container2">
        <h1>  {{ $user->username}} Profile</h1>

        <div class="profile-img">
             <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""/>
            <div class="file btn btn-lg btn-primary">
                Change Photo
                <input type="file" name="file"/>
            </div>
        </div>

        <div class="affichage">
            <ul>
            <div class="col-md-15">
                <div class="card mb-3">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                        <h5 class="mb-0">last Name: </h5>
                        </div>
                        <div class="col-sm-5 text-secondary">
                            <h5>{{$user->name}}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                        <h5 class="mb-0">first name:</h5>
                        </div>
                        <div class="col-sm-5 text-secondary">
                         <h5> {{$user->first_name }}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                        <h5 class="mb-0">username:</h5>
                        </div>
                        <div class="col-sm-5 text-secondary">
                         <h5>{{ $user->username}}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                        <h5 class="mb-0">contact:</h5>
                        </div>
                        <div class="col-sm-5 text-secondary">
                        <h5>{{$user->user_phone }} </h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                        <h5 class="mb-0">Mail:</h5>
                        </div>
                        <div class="col-sm-5 text-secondary">
                         <h5>{{$user->email }}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                        <h5 class="mb-0">code:</h5>
                        </div>
                        <div class="col-sm-5 text-secondary">
                        <h5> {{$user->code}}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                        <h5 class="mb-0">company name:</h5>
                        </div>
                        <div class="col-sm-5 text-secondary">
                          <h5> 
                            @if ($user->fk_carrier_id) 
                            {{ $user->carrier->company_name }} 
                            @else 
                            Aucune entreprise associée
                            @endif
                         </h5> 
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </ul>
        <a href="{{ route('carrier.profile.affichage') }}"><button type="submit">Refresh</button></a>
        </div>

        <a id="edit-profile-button" href="#">Edit Profile</a>
        <div id="edit-profile-form" style="display: none;">
                <form id="" action="{{ route('carrier.profile.update') }}" method="post">
                    @csrf
                    @method('post') 

                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
                    <input type="text" name="first_name" id="first_name" value="{{old('first_name', $user->first_name)}}">
                    <input type="text" name="username" id="username" value="{{old('username', $user->username)}}">
                    <input type="tel" name="user_phone" id="user_phone" value="{{old('user_phone', $user->user_phone) }}">
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email)}}">
                    <input type="text" name="company_name" id="company_name" value="{{old('company_name', $user->carrier->company_name)}}">
                    <button type="submit">Update Profile</button>
                </form>
        </div>


</div>
         <script>
                $(document).ready(function () {
                    $("#edit-profile-button").click(function () {
                        $("#edit-profile-form").toggle();
                    });
                });
                
                $(document).ready(function (){
                setTimeout(function(){
                    $("div.alert").remove();
                }, 3000 ); //3s

            });
        </script>

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

/* Style pour les champs de mon formulaire */
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

/* Style pour mon lien "Refresh" */
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