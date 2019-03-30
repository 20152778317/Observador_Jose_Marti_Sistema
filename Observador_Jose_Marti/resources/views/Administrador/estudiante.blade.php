@extends('home')

@section('content')

            <div class="container-fluid">
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Estudiantes Nuevos</h4>
                        <h6 class="card-subtitle"></h6>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Agregar Estudiante</button>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            
                            <!-- Modal content-->
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="Guardar" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Nuevo Estudiante</h4>
                            </div>
                            <div class="modal-body">
                                    <form id="example-form" action="#" class="m-t-40">
                                    <div>
                                        <h3>Información Estudiantes</h3>
                                        <section>
                                            <div class="row mb-3">
                                                <div class="col-lg-6">
                                                    <label for="txt_Id_Estudiante">Identificación Estudiante *</label>
                                                    <input id="txt_Id_Estudiante" name="txt_Id_Estudiante" type="text" class="required form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Tipo Identificación *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="CC"> Cedula de ciudadanía (CC)</option>
                                                            <option value="CE"> Cedula Extranjera (CE)</option>
                                                            <option value="NES"> Numero de Estadía (NES)</option>
                                                            <option value="RC"> Registro Civil (RC)</option>
                                                            <option value="TI"> Tarjeta de Identidad (TI)</option>
                                                            <option value="P">Pasaporte</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                <label for="txt_Nom_Estudiante">Nombres *</label>
                                                <input id="txt_Nom_Estudiante" name="txt_Nom_Estudiante" type="text" class="required form-control">
                                                </div>
                                            <div class="col-lg-3">
                                            <label for="txt_Ape_Estudiante">Apellidos *</label>
                                                <input id="txt_Ape_Estudiante" name="txt_Ape_Estudiante" type="text" class="required form-control">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="txt_Sex_Estudiante">Sexo *</label>
                                                        <select class="form-control" style="width: 100%; height:36px;">
                                                                <option>Seleccion</option>
                                                                <option value="F">Femenino</option>
                                                                <option value="M">Masculino</option>
                                                        </select>
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="txt_Sex_Estudiante">Grupo Sanguíneo *</label>
                                                        <select class="form-control" style="width: 100%; height:36px;">
                                                                <option>Seleccion</option>
                                                                <option value="A+">A+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                                <option value="B+">B+</option>
                                                                <option value="B-">B-</option>
                                                                <option value="O+">O+</option>
                                                                <option value="O-">O-</option>
                                                        </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="txt_Sex_Estudiante">Departamento Nacimiento *</label>
                                                        <select class="form-control" style="width: 100%; height:36px;">
                                                                <option>Seleccion</option>
                                                                <option value="C">Bogotá D.C</option>
                                                                <option value="A">Amazonas</option>
                                                        </select>
                                                </div>
                                            <div class="col-lg-4">
                                                <label for="txt_Sex_Estudiante">Ciudad Nacimiento *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="C">Bogotá D.C</option>
                                                            <option value="A">Leticia</option>
                                                    </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="txt_Fecha_Naci_Est">Fecha Nacimiento *</label>
                                                <input id="txt_Fecha_Naci_Est" name="txt_Fecha_Naci_Est" type="text" class="required form-control">
                                            </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="txt_Eps_Est">EPS *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="Eps1">Salud Total</option>
                                                            <option value="Eps2">Medimás</option>
                                                            <option value="Eps3">Compensar</option>
                                                            <option value="Eps4">Nueva Eps</option>
                                                            <option value="Eps5">Salud Vida</option>
                                                            <option value="Eps6">Capital Salud</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="email">Correo Electrónico </label>
                                                    <input id="email" name="email" type="text" class="email form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="txt_Tel_Estudiante">Telefono Estudiante </label>
                                                    <input id="txt_Tel_Estudiante" name="txt_Tel_Estudiante" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="txt_Direccion">Dirección *</label>
                                                    <input id="txt_Direccion" name="txt_Direccion" type="text" class="required form-control"> 
                                                </div>

                                                <div class="col-lg-4">
                                                    <label for="txt_Barrio_Estudiante">Barrio *</label>
                                                    <input id="txt_Barrio_Estudiante" name="txt_Barrio_Estudiante" type="text" class="required form-control">
                                                </div>

                                                <div class="col-lg-4">
                                                    <label for="txt_Estrato_Est">Estrato *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                    </select>
                                                </div>
                                            <!-- <div class="col-lg-3">
                                                    <label for="Fecha_Nacimiento">Fecha Nacimiento </label>
                                                <input type="date" name="Fecha_Nacimiento" step="1" min="1900-01-01" max="2020-01-01" value="<?php echo date("Y-m-d");?>" class="required form-control">  
                                                </div>-->
                                            </div>      

                                            <div class="row mb-3">

                                            <div class="col-lg-4">
                                                <label for="txt_Localidad_Est">Localidad *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="1">Usaquén</option>
                                                            <option value="2">Chapinero</option>
                                                            <option value="3">Santa Fe</option>
                                                            <option value="4">San Cristóbal</option>
                                                            <option value="5">Usme</option>
                                                            <option value="6">Tunjuelito</option>
                                                            <option value="7">Bosa</option>
                                                            <option value="8">Kennedy</option>
                                                            <option value="9">Fontibón</option>
                                                            <option value="10">Engativá</option>
                                                            <option value="11">Suba</option>
                                                            <option value="12">Barrios Unidos</option>
                                                            <option value="13">Teusaquillo</option>
                                                            <option value="14">Mártires</option>
                                                            <option value="15">Antonio Nariño</option>
                                                            <option value="16">Puente Aranda</option>
                                                            <option value="17">Candelaria</option>
                                                            <option value="18">Rafael Uribe Uribe</option>
                                                            <option value="19">Ciudad Bolívar</option>
                                                            <option value="20">Sumapaz</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-4">
                                                <label for="txt_Sex_Estudiante">Departamento Residencia *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="C">Bogotá D.C</option>
                                                            <option value="A">Amazonas</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-4">
                                                <label for="txt_Sex_Estudiante">Ciudad *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="C">Bogotá D.C</option>
                                                            <option value="A">Leticia</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <p>(*) Campos Obligatorios</p>
                                        </section>

                                        <h3>Información Académica</h3>
                                        <section>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="txt_Jornada_Est">Jornada *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="1">Unica</option>
                                                            <option value="2">Compelta</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="txt_Grado_Est">Grado *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="Pre">Pre-Jardín</option>
                                                            <option value="Jardin">Jardin</option>
                                                            <option value="Transicion">Transición</option>
                                                            <option value="1">1°</option>
                                                            <option value="2">2°</option>
                                                            <option value="3">3°</option>
                                                            <option value="4">4°</option>
                                                            <option value="5">5°</option>
                                                            <option value="6">6°</option>
                                                            <option value="7">7°</option>
                                                            <option value="8">8°</option>
                                                            <option value="9">9°</option>
                                                            <option value="10">10°</option>
                                                            <option value="11">11°</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-3">
                                                <label for="txt_Salon_Est">Salón *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="1">101</option>
                                                            <option value="2">202</option>
                                                            <option value="3">303</option>
                                                            <option value="4">401</option>
                                                            <option value="5">504</option>
                                                            <option value="6">1101</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-3">
                                                <label for="txt_Salon_Est">Ruta *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>No Aplica</option>
                                                            <option value="1">681</option>
                                                            <option value="2">327</option>
                                                            <option value="3">382</option>
                                                            <option value="4">471</option>
                                                            <option value="5">324</option>
                                                            <option value="6">101</option>
                                                    </select>
                                                </div>   
                                            </div>
                                            <p>(*) Campos Obligatorios</p>
                                        </section>

                                        <h3>Información Acudiente</h3>
                                        <section>
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="txt_Id_Acu">Identificación Acudiente *</label>
                                                    <input id="txt_Id_Acu" name="txt_Id_Acu" type="text" class="required form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>Tipo Identificación *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="CC"> Cedula de ciudadanía (CC)</option>
                                                            <option value="CE"> Cedula Extranjera (CE)</option>
                                                            <option value="NES"> Numero de Estadía (NES)</option>
                                                            <option value="RC"> Registro Civil (RC)</option>
                                                            <option value="TI"> Tarjeta de Identidad (TI)</option>
                                                            <option value="P">Pasaporte</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="txt_Fecha_Naci_Acu">Fecha Nacimiento *</label>
                                                    <input id="txt_Fecha_Naci_Acu" name="txt_Fecha_Naci_Est" type="text" class="required form-control">
                                            </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                <label for="txt_Nom_Acu">Nombres *</label>
                                                <input id="txt_Nom_Acu" name="txt_Nom_Estudiante" type="text" class="required form-control">
                                                </div>
                                                <div class="col-lg-3">
                                                <label for="txt_Ape_Acu">Apellidos *</label>
                                                    <input id="txt_Ape_Acu" name="txt_Ape_Estudiante" type="text" class="required form-control">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="txt_Sex_Acu">Sexo *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="F">Femenino</option>
                                                            <option value="M">Masculino</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="txt_Parentesco_Acu">Parentesco *</label>
                                                    <select class="form-control" style="width: 100%; height:36px;">
                                                            <option>Seleccion</option>
                                                            <option value="p1">Bisabuelo</option>
                                                            <option value="p2">Bisabuela</option>
                                                            <option value="p3">Primo</option>
                                                            <option value="p3">Prima</option>
                                                            <option value="p4">Sobrino</option>
                                                            <option value="p5">Sobrina</option>
                                                            <option value="p6">Abuelo</option>
                                                            <option value="p7">Abuela</option>
                                                            <option value="p7">Madre</option>
                                                            <option value="p7">Padre</option>
                                                            <option value="p7">Hermano</option>
                                                            <option value="p7">Hermana</option>
                                                            <option value="p7">Tio</option>
                                                            <option value="p7">Tia</option>
                                                            <option value="p7">Estudiante</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="txt_Direccion">Dirección *</label>
                                                    <input id="txt_Direccion" name="txt_Direccion" type="text" class="required form-control"> 
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="email">Correo Electrónico *</label>
                                                    <input id="email" name="email" type="text" class="required email form-control">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="txt_Tel_Acu">Telefono Acudiente </label>
                                                    <input id="txt_Tel_Acu" name="txt_Tel_Acu" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <p>(*) Campos Obligatorios</p>
                                        </section>
                                        <h3>Final</h3>
                                        <section>
                                            <div class="col-lg-3">
                                                <label for="txt_Sex_Acu">Estado Estudiante *</label>
                                                <select class="form-control" style="width: 100%; height:36px;">
                                                        <option value="F">Activo</option>
                                                        <option value="M">Inactivo</option>
                                                </select>
                                            </div>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
  
        </div>
    </div>
  
    <script src="Plugins/jquery/dist/jquery.min.js"></script>
    <!--This page JavaScript -->
    <script src="Plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="Plugins/jquery-validation/dist/jquery.validate.min.js"></script>

    <script>
        // Basic Example with form
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
     form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });
    </script>

</body>
</html>          
@endsection