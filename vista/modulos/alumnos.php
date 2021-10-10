<div class="content-wrapper">
	<section class="content-header">
		<h1>Administrador de Alumnos</h1>
		
	</section>
<section class="content" >

<div class="box">
	<div class="box-header with-border">
		<button class="btn btn-primary " data-toggle="modal" data-target="#modalAgregarAlumno">
			Agregar Alumno
			
		</button>		
	</div>
  <br>

	<div class="box-body">
		<table class="table table-bordered table-striped tablas">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Fecha de Nacimiento</th>
									
				</tr>
			</thead>
			<tbody>
        <?php 

        $item = null;
        $valor = null;

        $alumnos = MvcControlador::ctrMostrarAlumno($item, $valor);

        foreach ($alumnos as $key => $value) {
        echo '<tr>
          <td>'.$value["icodigoalumno"].'</td>
          <td>'.$value["vchnombre"].'</td>
          <td>'.$value["vchapellidos"].'</td>
          <td>'.$value["dtfechanac"].'</td>
           ';
        }

         ?>


				
			</tbody>			
		</table>	

	</div>
	
</div>
</section>
</div>

<!--====================================================
	MODAL AGREGAR ALUMNO
	===============================================-->

<div id="modalAgregarAlumno" class="modal fade" tabindex="-1" role="dialog">

  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <form method="post" onsubmit="return validarRegistro()">

      <div class="modal-header" style="background:#3c8dbc; color: white">
        <h5 class="modal-title">Agregar Alumno</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>
      </div>

      <div class="modal-body">
        <div class="box-body">
        	<div class="form-group">
            <label for="alumnoRegistro"> Ingresa el código del Alumno</label>
        		<div class="input-group">
        			<span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
        			<input  type="number" class="form-control input-lg" name="nuevaClave" placeholder="Maximo 4 cifras. Ejem:1234" id="alumnoRegistro" maxlength="4" minlength="4" required>
        		</div>        		
        	</div>

        	<div class="form-group">

        		<div class="input-group">
        			<span class="input-group-addon"><i class="fa fa-user"></i></span>
        			<input  type="text" class="form-control input-lg" name="nuevoNombre"  placeholder="Ingresa el Nombre del Alumno" id="nombreRegistro" required>
        		</div>
        	</div>
<
        	<div class="form-group">
        		<div class="input-group">
        			<label>Palabra Clave</label>
        			<input type="text" class="form-control input-lg" name=""  id="" required>
        		</div>
        	</div>

        	<div class="form-group">
        		<div class="input-group">
        			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        			<input type="date" class="form-control input-lg" name="nacimiento" placeholder="Igresa fecha de nacimiento" required>
        		</div>
        		
        	</div>
          <div id="res_user"></div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Agregar Alumno</button>
      </div>
      <?php 
        $crearalumno = new MvcControlador();
      $crearalumno -> ctrCrearusuario();

      
       ?>

      </form>

    </div>
  </div>
</div>




