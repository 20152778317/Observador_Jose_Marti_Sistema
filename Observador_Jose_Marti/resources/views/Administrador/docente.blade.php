@extends('home')

@section('content')
<form action="{{url('/docente')}}" method="post">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Docente Nuevo</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" action="#" class="m-t-40">
                            <div>
                                <h3>Información Docente</h3>
                                <section>
                                    <div class="row mb-3">
                                        <div class="col-lg-6">
                                            <label for="Id_Docente">Identificación Docente *</label>
                                            <input id="Id_Docente" name="Id_Docente" type="text" class="required form-control">
                                        </div>
                                        <div class="col-lg-6">
                                             <label for="Cod_Tipo_Doc_Docente">Tipo Identificación *</label>
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
                                         <label for="Nombres_Docente">Nombres *</label>
                                           <input id="Nombres_Docente" name="Nombres_Docente" type="text" class="required form-control">
                                         </div>
                                      <div class="col-lg-3">
                                      <label for="Apellidos_Docente">Apellidos *</label>
                                        <input id="Apellidos_Docente" name="Apellidos_Docente" type="text" class="required form-control">
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
                                        
                                        <div class="col-lg-6">
                                            <label for="email">Correo Electrónico *</label>
                                            <input id="email" name="email" type="text" class="required form email form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="txt_Tel_Estudiante">Telefono Docente </label>
                                            <input id="txt_Tel_Estudiante" name="txt_Tel_Estudiante" type="text" class="form-control">
                                        </div>
                                    </div>                                      
                                     <!-- <div class="col-lg-3">
                                            <label for="Fecha_Nacimiento">Fecha Nacimiento </label>
                                           <input type="date" name="Fecha_Nacimiento" step="1" min="1900-01-01" max="2020-01-01" value="<?php echo date("Y-m-d");?>" class="required form-control">  
                                        </div>-->
                                         
                                 <p>(*) Campos Obligatorios</p>
                                </section>

                                <h3>Información Laboral</h3>
                                <section>
                                    <div class="row mb-3">
                                        <div class="col-lg-4">
                                            <label for="txt_Area_Docente">Área *</label>
                                            <select class="form-control" style="width: 100%; height:36px;">
                                                    <option>Seleccion</option>
                                                    <option value="Pre">Humanidades</option>
                                                    <option value="Jardin">Complementaria</option>
                                                    <option value="Transicion">Eduacion Fisica</option>
                                                    <option value="1">Eduacion Artistica</option>
                                                    <option value="2">Enfasis</option>
                                                    <option value="3">Matematicas</option>
                                                    <option value="4">Ciencias Naturales</option>
                                                    <option value="5">Tecnologia e Informatica</option>
                                                    <option value="6">Ciencias Sociales</option>
                                                    <option value="7">Ciencias Economicas y Politicas</option>
                                                    <option value="8">Filosofia</option>
                                                    <option value="9">Edu.Religiosa</option>
                                                    <option value="10">Ética y Valores</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4">
                                        <label for="txt_Salon_Est">Asignatura *</label>
                                            <select class="form-control" style="width: 100%; height:36px;">
                                                    <option>Seleccion</option>
                                                    <option value="1">Español</option>
                                                    <option value="2">Matematicas</option>
                                                    <option value="3">Sociales</option>
                                                    <option value="4">Religion</option>
                                                    <option value="5">Quimica</option>
                                                    <option value="6">Etica</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4">
                                        <label for="txt_Salon_Docente">Curso a Cargo *</label>
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
                                <h3>Final</h3>
                                <section>
                                    <div class="col-lg-3">
                                        <label for="txt_Estadoo_Docente">Estado Docente *</label>
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
    </form>
  
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