@extends('layouts.carrier')

@section('content')

    <div class="box-content">
        <div class="box-heading">
            <div class="box-title">
                <h3 class="mb-35">Mon contrat de Transport</h3>
            </div>
            <div class="box-breadcrumb">
                <div class="breadcrumbs">
                    <ul>
                        <li><a class="icon-home" href="index.html">Dashboard</a></li>
                        <li><span>Contrat de transport</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Canevas de contrat de transport
                </div>
                <div class="card-body">
                    Canevas Content
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    Ajouter les engins concernés
                    <button class="btn" id="add_engin" data-bs-toggle="modal" data-bs-target="#ModalContrat">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg>
                    </button>

                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                        @csrf
                        <div class="row" id="wrapper" >

                        </div>
                        <button type="submit" id="btn_engin_add" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>

            <div class="card mt-20">
                <div class="card-header">
                    Ajouter les conducteurs concernés
                    <button class="btn" id="add_permis">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg>
                    </button>

                </div>
                <div class="card-body">

                </div>
            </div>
        </div>

        {{-- Search engin--}}
        <div class="modal fade" id="ModalContrat" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content apply-job-form">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body pl-30 pr-30 pt-50">
                        <div class="text-center mb-10" >
                            <button id="add_engin_modal" class=" btn font-sm text-brand-2" data-bs-toggle="modal" data-bs-target="#ModalEngin">Ajouter</button>
                        </div>
                        <table class="table table-bordered table-responsive" id="immatriculation_table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Immatriculation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="id_engin" id="id_engin" value="1" class="form-check"/>
                                    </td>
                                    <td>
                                        <input type="readonly" value="1221"  id="id_immat" class="form-control">
                                    </td>
                                    <td>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="id_engin" id="id_engin" value="2" class="form-check"/>
                                    </td>
                                    <td>
                                        <input type="readonly" value="1222"  id="id_immat" class="form-control">
                                    </td>
                                    <td>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="id_engin" id="id_engin" value="3" class="form-check"/>
                                    </td>
                                    <td>
                                        <input type="readonly" value="1223"  id="id_immat" class="form-control">
                                    </td>
                                    <td>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <button class="btn btn-primary" id="btn_save_engin">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                                  <path d="M11 2H9v3h2V2Z"/>
                                  <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z"/>
                                </svg>
                            </span>
                            Enregistrer
                        </button>

                    </div>
                </div>
            </div>
        </div>

        {{--Add engin--}}
        <div class="modal fade" id="ModalEngin" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content apply-job-form">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body pl-30 pr-30 pt-50">
                        <form action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="font-sm color-text-mutted mb-10">Immatriculation<span class="required" >*</span></label>
                                        <input class="form-control" type="text" id="immatriculation[]" name="immatriculation[]" placeholder="BF11GH0000" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#btn_engin_add").hide();
        var wrapper         = $("#wrapper"); //Fields wrapper
        var add_button      = $("#add_engin"); //Add button ID

        var wrapper_permis         = $("#wrapper_permis"); //Fields wrapper
        var add_button_permis      = $("#add_permis"); //Add button ID
        var y = 1; //initlal text box count
        $(add_button_permis).click(function(e){ //on add input button click
            e.preventDefault();
            y++; //text box increment
            $(wrapper_permis).append(
                `
                     <div class="col-md-12" >
                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" id="remove_field_permis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </span>
                            <input class="form-control" type="text" id="permis[]" name="permis[]" placeholder="00002023GH" required>
                        </div>
                    </div>
                    `
            ); //add input box
        });
        $(wrapper_permis).on("click","#remove_field_permis", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); y--;
        })

        new DataTable('#immatriculation_table', {
            responsive:true,
            paging:false,
            "ordering": true,
            language:{
                "decimal":        "",
                "emptyTable":     "Pas de données disponible",
                "info":           "Affichage _START_ sur _END_ de _TOTAL_ éléments",
                "infoEmpty":      "Affichage 0 sur 0 de 0 entries",
                "infoFiltered":   "(filtrage de _MAX_ total éléments)",
                "infoPostFix":    "",
                "thousands":      ",",
                "lengthMenu":     "Afficher _MENU_ éléments",
                "loadingRecords": "Chargement...",
                "processing":     "",
                "search":         "",

                "zeroRecords":    "Pas de correspondance trouvé",
                "paginate": {
                    "first":      "Premier",
                    "last":       "Dernier",
                    "next":       "Suivant",
                    "previous":   "Précédent"
                },
            }
        } );

        var btn_engin_modal = $("#add_engin_modal");
        $(btn_engin_modal).click(function (e){
            $("#ModalContrat").modal('hide');
        });


        var data = []
        var btn_save_engin = $("#btn_save_engin");

        $(btn_save_engin).click(function (){
            data = [];
            var checkedBoxes = document.querySelectorAll('input[name=id_engin]');
            var id_immatriculation = document.querySelectorAll('input[id=id_immat]');

            for(i =0; i < checkedBoxes.length; i++){
                if(checkedBoxes[i].checked){
                    data.push({
                        id:checkedBoxes[i].value,
                        immat:id_immatriculation[i].value,
                    })
                }
            }
            console.log(data);
            data.forEach(item => {
                $(wrapper).append(
                    `
                     <div class="col-md-12" >
                        <div class="form-group input-group mb-3">
                            <span class="input-group-text" id="remove_field">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </span>
                            <input class="form-control" type="hidden" value="${item.id}" id="id[]" name="id[]" >
                            <input class="form-control" type="text" value="${item.immat}" id="immatriculation[]" name="immatriculation[]" placeholder="BF11GH0000" required>
                        </div>
                    </div>
                    `
                ); //add input box
                checkedBoxes.forEach(check=>{
                    if(check.checked){
                        check.checked = false;
                    }
                });
            });
            $("#btn_engin_add").show();
            $('#ModalContrat').modal('hide');
        });
        $(wrapper).on("click","#remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove();
        })
    </script>

@endsection
