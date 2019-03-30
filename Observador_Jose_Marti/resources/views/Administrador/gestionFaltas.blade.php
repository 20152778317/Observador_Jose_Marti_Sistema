@extends('home')

@section('content')


@if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
       </div>
    @endif
   <script> 
	 $('.textarea_editor').wysihtml5();
 </script>

<!--gestion -->

<h1> <small>Gestion Faltas</small></h1>
<form class="form-inline">
  <div class="form-group">
          </div>
  <div class="form-group">
    <label for="inputPassword2" class="sr-only"></label>
    Identificacion Estudiante: <input type="text" class="form-control" id="txtBuscarIdFaltas" placeholder=" ">
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>

<table id="tableUserList" style="background: white" class="table table-bordered table-hover table-responsive">
				<caption></caption>
        
				<thead>
        
					<tr>
						<th>Nombre Acudiente</th>
						<th>Fecha Citación</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Observacion</th>
                       
            
						<th colspan="2">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					  <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           
						<td>
							<button class="editUser btn btn-success" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Editar</button>
						</td>
						 <td>
							<button class="deleteUser  btn btn-warning">Eliminar</button>
						</td>
					</tr>
					
						 
				</tbody>
				
			</table>
      <div class="table-pagination pull-right">
					</div>
      

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- segundo modal-->
<div id="Crear" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Estudiante</h4>
      </div>
      <div class="modal-body">
       
       
              
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Identificacion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Documento</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Nombres</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Apellidos</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="">
            </div>
            </div>
            <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Nacimiento</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Direccion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Jornada</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Sede</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Departamento</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
               </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Siguiente</button>
            </div>
          </div>
     

    </div>

  </div>
</div>






@endsection