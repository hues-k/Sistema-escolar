<div class="content-wrapper">
	<section class="content-header">
		<h1>Administrador de Materias</h1>
		
	</section>
<section class="content" >

<div class="box">
	<div class="box-header with-border">
		<button class="btn btn-primary " data-toggle="modal" data-target="#modalAgregarMateria">
			Agregar Materia			
		</button>		
	</div>
	<br>

	<div class="box-body">
		<table class="table table-bordered table-striped tablas">
			<thead>
				<tr>
					<th>Código de materia</th>
					<th>Nombre de la materia</th>					
									
				</tr>
			</thead>
			<tbody>
				<?php
				$item = null;
				$valor = null;

				$materias = MvcControlador::ctrMostrarMateria($item,$valor);

				foreach ($materias as $key => $value) {

					echo '<tr>
					<td>A'.$value["vchcodigomateria"].'</td>
					<td>'.$value["vchmateria"].'</td>
					
					
					</td>
				</tr>';
				}

				 ?>
						
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

     <form method="post"   onsubmit="return validarMateria()">

      <div class="modal-header" style="background:#3c8dbc; color: white">
        <h5 class="modal-title">Agregar Materia</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>
      </div>





      <div class="modal-body">
        <div class="box-body">
        	<div class="form-group">
        		<label for="CodiMa"> Ingresa el código de la Materia</label>
        		<div class="input-group">
        			<span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
        			<input type="text" class="form-control input-lg" id="CodiMa" name="nuevaClaveM" placeholder="Maximo 5 cifras. Ejem:AA32R" required>
        		</div>        		
        	</div>

        	<div class="form-group">
        		<div class="input-group">
        			<span class="input-group-addon"><i class="fa fa-book"></i></span>
        			<input type="text" class="form-control input-lg" name="nuevaMateria" placeholder="Ingresa el nombre de la Materia" required>
        		</div>
        	</div>



        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary " name="add_materia">Agregar Materia</button>
      </div>
      <?php
      $crearMateria = new MvcControlador();
      $crearMateria -> ctrCrearmateria();

        ?>

      </form>

    </div>
  </div>
</div>