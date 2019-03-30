@extends('home')

@section('content')
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Asignatura Nueva</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" action="#" class="m-t-40">
                            <div>
                                <h3>Información Asignatura</h3>
                                <section>
                                <!--
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
-->

                            <form action="{{url('/asignatura')}}" method="post" enctype="multipart/form-data">


                                       <label for="txt_Nom_Asignatura">codigo asignatura *</label>
                                       <input id="txt_Nom_Asignatu" name="Cod_Asignatura" type="text" class="required form-control" value="">
                                       
                                       <label for="txt_Nom_Asignatura">Nombre asignatura *</label>
                                       <input id="txt_Nom_Asignatura" name="Nombre_Asignatura" type="text" class="required form-control" value="">
                        
                                       
                                            <label for="txt_Nom_Asignatura">estado asignatura *</label>
                                            <input id="txt_Nom_" name="Estado_Asignatura" type="text" class="required form-control" value="">
                   
                                       
                                       <label for="txt_Nom_Asignatura">codigo area *</label>
                                       <input id="txt_Nom_Asi" name="Cod_AreaAsignatura" type="text" class="required form-control" value="">
                                       
                                 

                                   
                                <!--
                                        <div class="col-lg-4">
                                        
                                            <label for="txt_Estado_Asignatura">Estado Asignatura *</label>
                                            <select class="form-control" style="width: 100%; height:36px;">
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>
                                        </div>
                                -->                                            
                                    </div>
                                    
                                    </div>
                                    <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <!--<button type="button" class="btn btn-outline-success" value="agregar">Guardar</button>-->
                                        <input type="submit" value ="Agregar">
                                    </div>
                                
                            </div>
                            </form>
                            </div>
                        </form>
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