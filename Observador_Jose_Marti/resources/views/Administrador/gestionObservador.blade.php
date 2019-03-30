
@extends('home')

@section('content')


<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">OBSERVADOR CONVIVENCIAL</h4>
                                <form class="form-inline">
                                <div class="form-group">
                                
                                Documento Estudiante: <input type="text" class="form-control" id="txtDocumento">
                                
                                </div> 
                                </form>
                                <button type="submit" class="btn btn-default">Buscar</button>
                            </div>

                            <div class="card-body">
                                <form class="form-inline">
                                    <div class="form-group">
                                    
                                    Nombre Estudiante:  <input class="form-control" type="text" placeholder="" id="txtNombreEstudiante">
                                    </div>

                                    <div class="form-group">
                                    
                                    Curso: <input class="form-control" type="text" placeholder="" id="txtCurso">
                                    </div>

                                    <div class="form-group">
                                    
                                    Jornada: <input class="form-control" type="text" placeholder="" id="txtJornada">
                                    </div>


                                </form>
                            </div>
                            
                            <div class="card-body">
                                <form class="form-inline">
                                    <div class="form-group">
                                    
                                    Sede: <input class="form-control" type="text" placeholder="" id="txtSede">
                                    </div>

                                    <div class="form-group">
                                    
                                    Acudiente: <input class="form-control" type="text" placeholder="" id="txtAcudiente">
                                    </div>

                                    <div class="form-group">
                                    
                                    Direccion: <input class="form-control" type="text" placeholder="" id="txtDireccion">
                                    </div>

                     
                                </form>
                                
                                
                            
                            </div>

                            <div class="card-body">
                                <form class="form-inline">
                                    <div class="form-group">
                       
                                    Telefono:  <input class="form-control" type="text" placeholder="" id="txtTelefono">

                                </form>
      
                            </div>

                    
                            <div class="card-body">
                                <form class="form-inline">
                                Seleccione Falta:
                                <div class="form-group">                             
                                <div class="form-group">
                                   <select class="form-control" id="comboFalta">
                                    <option>Porte Indebido Del Uniforme</option>
                                    <option>Porte De Armas</option>
                                    <option>Agresion Verbal</option>
                                    <option>Agresion Fisica</option>
                                </select>
                                </div>
                                </form>
                            </div>
                       
                     </div>
                     <!-- -->
                     <div class="form-control collectes-ville text-center" >
                            <div class="card-body">
                                <form class="form-inline">
                                Descripción De Comportamiento                                                        
                                </form>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="card-body">
                                <form class="form-inline">
                                 Estrategias De Seguimiento                                                    
                                </form>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <!--calendario -->
                            <div class="card-body">
                            <form class="form-inline">
                            Fecha Anotacion: <input type="date" name="FechaAnotacion" step="1" min="2018-01-01" max="2040-12-31" value="<?php echo date("Y-m-d");?>">
                            <!-- fin calendario -->
                                Nombre Docente: 
                                <input type="text" class="form-control" id="txtNombreDocente">
                                 Id Docente: 
                                 <input type="text" class="form-control" id="txtDocumentoDocente">
                                </form>

                            <!-- Modal Citacion-->

                            <div class="card-body">
                            <form class="form-inline">                               
                             <!-- Button  modal -->
                            En caso de que la anotacion disciplinaria lo requiera:<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            Citacion Acudiente
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Citacion Acudiente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                             <div class="modal-body">
                             <h4 class="card-title">Formato Citacion </h4>
                             <div class="card-body">
                                <form class="form-inline">
                                    <div class="form-group">
                                    
                                   Nombre Acudiente:  <input class="form-control" type="text" placeholder="" id="txtNombreAcudiente">
                                   <div class="card-body">
                            <form class="form-inline">
                                    Fecha Citacion: <input type="date" name="FechaAnotacion" step="1" min="2018-01-01" max="2040-12-31" value="<?php echo date("Y-m-d");?>">
                                        </div>
                                            Atentamente le solicito presentarse al colegio con el fin de tratar
                                                algunos asuntos relacionados con el desempeño de su hijo(@)
                                        <div class="form-group">                           
                                        Apellidos :  <input class="form-control" type="text" placeholder="" id="txtApellidos">
                                        Nombres :  <input class="form-control" type="text" placeholder="" id="txtNombres">
                                        Grupo : <input class="form-control" type="text" placeholder="" id="txtGrupo">
                                        </div>
                                        <div class="card-body">
                                        <form class="form-inline">
                                        Observaciones                                                        
                                        </form>
                                        <textarea class="form-control"  rows="3"></textarea>
                                        </div>
                                 </form>
                                
                            </div>
                           
                             </div>
                             <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                             <button type="button" class="btn btn-primary">Guardar E Imprimir Citacion</button>
                             </div>
                             </div>
                            </div>
                            </div>
                            </form>      
                                                   
                            </div>
                                        <!--fin modal-->
                            
                            </div>

                       </div>
                       
                       <!---->
                     </div>
     
                    </div>
                    
</div>
<button type="button" class="btn btn-info btn-lg">Crear E Imprimir Anotacion</button>

@if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
       </div>
    @endif
   <script> 
	 $('.textarea_editor').wysihtml5();
 </script>






@endsection