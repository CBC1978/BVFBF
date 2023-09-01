<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carrier-profil</title>
</head>
<body>
        <h1>User Profile</h1>
        <p>username: {{$user->name}}</p>
        <p>first_name: {{$user->first_name }}</p>
        <p>username: {{ $user->username}}</p>
        <p>contact: {{$user->user_phone }}</p>
        <p>MAIl: {{$user->email }}</p>
        <p>code: {{$user->code}}</p>
        <p>company_name:  @if ($user->fk_carrier_id)
                                {{ $user->shipper->company_name }}
                            @else
                                Aucune entreprise associée
                            @endif</p>
        <a href="{{ route('carrier.profile.affichage') }}">Refresh</a>

        <a id="edit-profile-button" href="#">Edit Profile</a>

        <div id="edit-profile-form" style="display: none;">
            <form id="update-profile-form" method="POST" action="{{ route('carrier.profile.update') }}">
                @csrf
                @method('PUT')

                <input type="text" name="name" value="{{$user->name}}">
                <input type="text" name="first_name" value="{{$user->first_name }}">
                <input type="tel" name="user_phone" value="{{$user->user_phone }}">
                <input type="email" name="email" value="{{ $user->username}}">
                <input type="text" name="code" value="{{$user->code}}">
                <input type="text" name="status" value="{{$user->role}}">
                <button type="submit">Update Profile</button>
            </form>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const editProfileButton = document.getElementById("edit-profile-button");
                const editProfileForm = document.getElementById("edit-profile-form");

                editProfileButton.addEventListener("click", function(event) {
                    event.preventDefault();
                    editProfileForm.style.display = "block";
                });

                const updateProfileForm = document.getElementById("update-profile-form");

                updateProfileForm.addEventListener("submit", function(event) {
                    event.preventDefault();

                    const formData = new FormData(updateProfileForm);

                    fetch(updateProfileForm.action, {
                        method: "PUT",
                        body: formData,
                        headers: {
                            "X-CSRF-TOKEN": formData.get("_token"),
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert("Profile updated successfully");
                        editProfileForm.style.display = "none";
                        location.reload();
                    })
                    .catch(error => {
                        alert("An error occurred while updating the profile");
                    });
                });
            });
        </script>

</body>
</html>