<div class="content-wrapper">
	<section class="content-header">
		<h1>Inscripción de Materias</h1>
		
	</section>
<section class="content" >

<div class="box">
	<div class="box-header with-border">
		<button class="btn btn-primary " data-toggle="modal" data-target="#modalAgregarMateria">
			Asignar Materia			
		</button>		
	</div>
	<br>
	<div>
		
<nav class="navbar navbar-light bg-light" >
  <form class="form-inline" method="">
  	<select class="form-control input-lg mr-sm-2" name="codigoAL">
  	
    </select>
    <button style="margin: 5px;" class="btn btn-success my-2 my-sm-0" type="submit">Buscar Alumno</button>
    <?php
    	

      ?>

  </form>
</nav>
	</div>



	
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Código del Alumno</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Email" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Fecha de Nacimiento</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Password" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Nombre del Alumno</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Jesus Huesca Jimenez" readonly>
  </div>
  <div class="box-body">
  	<table class="table table-bordered table-striped ">
			<thead>
				<tr>
					<th>Codigo de la Materia</th>
					<th>Nombre de la Materia</th>
					<th>Calificación Final</th>
					
					<th>Acciones</th>					
				</tr>
			</thead>
			<tbody> 
     <tr>
      <td></td>
      <td></td>
      <td></td>
          
          <td> 
            <div class="btn-group">
<button class="btn btn-warning" data-toggle="modal" data-target=""><i class="fa fa-pencil"></i></button>
              <button class="btn btn-danger"><i class="fa fa-times"></i></button>

            </div>
          </td>
        </tr> 
			</tbody>			
		</table>	

  	
  </div>
  

	
</div>
</section>
</div>

<!--====================================================
	MODAL AGREGAR MAteria
	===============================================-->

<div id="modalAgregarMateria" class="modal fade" tabindex="-1" role="dialog">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

     <form method="post">

      <div class="modal-header" style="background:#3c8dbc; color: white">
        <h5 class="modal-title">Incripcion de Materias</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>
      </div>





      <div class="modal-body">
        <div class="box-body">


        	<input type="hidden" name="Cfinal" value="0"> 

        	<div class="form-group">
        		<div class="input-group">
        			<span class="input-group-addon"><i class="fa fa-user"></i></span>

        			<select class="form-control input-lg" name="CodigoAl">

        				<?php
        				$item = null;
        				$valor = null;

        				$CodigA = MvcControlador::ctrMostrarAlumno($item, $valor);
        				foreach ($CodigA as $key => $value) {
        					echo '<option>'.$value["icodigoalumno"].'</option>';
        				} ?>		
					</select>
        		</div>        		
        	</div>

        	<div class="form-group">
        		<div class="input-group">
        			<span class="input-group-addon"><i class="fa fa-book"></i></span>

					<select class="form-control input-lg" name="codigoMa">
						<?php 

						$item = null;
						$valor = null;

						$codiMa = MvcControlador::ctrMostrarMateria($item,$valor);
						foreach ($codiMa as $key => $value) {
							echo '<option>'.$value["vchcodigomateria"].'</option>';
						} ?>

				   </select>
        		</div>
        	</div>




        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary " name="add_materia">Agregar Inscripción</button>
      </div>
      <?php
      $inscripcion = new MvcControlador();
      $inscripcion -> ctrInscripcion();
      
      ?>

      </form>

    </div>
  </div>
</div>