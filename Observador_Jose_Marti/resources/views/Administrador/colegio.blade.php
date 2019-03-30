@extends('home')

@section('content')
<form action="{{url('/colegio')}}" method="post">
{{ csrf_field() }}
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Datos Colegio</h4>
                
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label for="Nombre_Colegio">Nombre Colegio *</label>
                                    <input id="Nombre_Colegio" name="Nombre_Colegio" type="text" class="required form-control">
                                </div>

                                <div class="col-lg-4">
                                    <label for="Nit_Colegio">Nit *</label>
                                    <input id="Nit_Colegio" name="Nit_Colegio" type="text" class="required form-control">
                                </div>

                                <div class="col-lg-4">
                                    <label for="Codigo_Dane">Código DANE *</label>
                                    <input id="Codigo_Dane" name="Codigo_Dane" type="text" class="required form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label for="Codigo_Icfes">Código Icfes *</label>
                                    <input id="Codigo_Icfes" name="Codigo_Icfes" type="text" class="required form-control">
                                </div>

                                <div class="col-lg-4">
                                    <label for="Resolucion_Aprobacion">Resolución de Aprobación *</label>
                                    <input id="Resolucion_Aprobacion" name="Resolucion_Aprobacion" type="text" class="required form-control">
                                </div>

                                <div class="col-lg-4">
                                    <label for="Rector_Colegio">Nombre Rector *</label>
                                    <input id="Rector_Colegio" name="Rector_Colegio" type="text" class="required form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <label for="Telefono_Colegio">Telefono *</label>
                                    <input id="Telefono_Colegio" name="Telefono_Colegio" type="text" class="required form-control">
                                </div>

                                <div class="col-lg-6">
                                    <label for="Direccion_Colegio">Dirección *</label>
                                    <input id="Direccion_Colegio" name="Direccion_Colegio" type="text" class="required form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-outline-success">Guardar</button>
                                </div>
                            </div>
                            
                     </div>  
                 </div>
            </div>
        </form>

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