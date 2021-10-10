<?php


class MvcControlador{
	
	static public function pagina(){
		include "vista/plantilla.php";
	}

	static public function ctrIngresoUsuario(){
		if (isset($_POST["loginU"])) {

			if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginU"])&&
				preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginP"])) {
				
				$tabla ="usuarios";

				$item ="usuario";
				$valor = $_POST["loginU"];

				$respuesta = MvcModelo::MdlMostrarUsuario($tabla, $item,$valor);

				if($respuesta["usuario"]==$_POST["loginU"]&& $respuesta["password"]==$_POST["loginP"]){
					$_SESSION["iniciarSesion"]= "ok";

					echo '<script>

					window.location = "inicio";

					</script';



				}else{
					echo "<br><div class =alert alert-danger>El usuario no existe</div>";
				}

			}


		}
	}


	static public function ctrCrearusuario(){
		if (isset($_POST["nuevoNombre"])) {

			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) && preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido"])) {

				$tabla ="cat_alumnos";

				$datos  = array("clave" => $_POST["nuevaClave"] ,
								"nombre" => $_POST["nuevoNombre"] ,
								"apellidos"=> $_POST["nuevoApellido"],
								"naci"=> $_POST["nacimiento"]);

				$respuesta = MvcModelo::mldAgregarAlumno($tabla,$datos);

				if ($respuesta =="ok") {
			 		echo '<script>

			 	swal({
			 		type: "success",
			 		title:"¡EL usuario ha sido guardado exitosamente !",
			 		showConfirmButton:true,
			 		confirmButtonText: "Cerrar",
			 		closeOnConfirm: false
			 		}).then((result)=>{

			 			if(result.value){
			 				window.location = "alumnos";
			 			}



			 			});


			 	</script>';
			 	}

			 }else{//alerta suave Jquery
			 	echo '<script>

			 	swal({
			 		type: "error",
			 		title:"¡EL usuario no puede ir vacio o llevar caracteres especiales!",
			 		showConfirmButton:true,
			 		confirmButtonText: "Cerrar",
			 		closeOnConfirm: false
			 		}).then((result)=>{

			 			if(result.value){
			 				window.location = "alumnos";
			 			}



			 			});


			 	</script>';

			 }
				
		}
	}


	static public function ctrCrearmateria(){
		if(isset($_POST["nuevaMateria"])){

			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaMateria"])) {

				$tabla = "cat_materias";

				$datos =  array("CodigoM" => $_POST["nuevaClaveM"],
								"NombreM" => $_POST["nuevaMateria"]);

				$respuesta = MvcModelo::mldAgregarMateria($tabla, $datos);

				if ($respuesta=="ok") {
			 		echo '<script>

			 	swal({
			 		type: "success",
			 		title:"¡La Materia se guardo exitosamente!",
			 		showConfirmButton:true,
			 		confirmButtonText: "Cerrar",
			 		closeOnConfirm: false
			 		}).then((result)=>{

			 			if(result.value){
			 				window.location = "materias";
			 			}



			 			});


			 	</script>';
			 	}

			 }else{//alerta suave Jquery
			 	echo '<script>

			 	swal({
			 		type: "error",
			 		title:"¡La Materia no puede ir vacio o llevar caracteres especiales!",
			 		showConfirmButton:true,
			 		confirmButtonText: "Cerrar",
			 		closeOnConfirm: false
			 		}).then((result)=>{

			 			if(result.value){
			 				window.location = "materias";
			 			}



			 			});


			 	</script>';

			}

		}
	}

	static public function ctrMostrarAlumno($item, $valor){

		$tabla ="cat_alumnos";

		$respuesta = MvcModelo::MdlMostrarUsuario($tabla, $item,$valor);

		return $respuesta;
	}


	static public function ctrMostrarInscripciones($item, $valor){
		$tabla ="cat_rel_alumno_materia";

		$respuesta = MvcModelo::MdlMostrarInscripcion($tabla, $item,$valor);

		return $respuesta;
	}

	static public function ctrMostrarMateria($item, $valor){
		$tabla = "cat_materias";

		$respuesta = MvcModelo::MdlMostrarMateria($tabla, $item,$valor);
		return $respuesta;
	}


	static public function ctrInscripcion(){
		if (isset($_POST["CodigoAl"])) {
			
			
			$tabla = "cat_rel_alumno_materia";

			$datos = array("Cali" => $_POST["Cfinal"],
						   "claveA"=> $_POST["CodigoAl"],
						   "claveM" => $_POST["codigoMa"]);

			$respuesta = MvcModelo::mldInscripcion($tabla, $datos);



			if ($respuesta =="ok") {
			 		echo '<script>

			 	swal({
			 		type: "success",
			 		title:"¡La inscripción ha sido guardado exitosamente !",
			 		showConfirmButton:true,
			 		confirmButtonText: "Cerrar",
			 		closeOnConfirm: false
			 		}).then((result)=>{

			 			if(result.value){
			 				window.location = "inscripcion";
			 			}



			 			});


			 	</script>';
			 	
			 	}else{//alerta suave Jquery
			 	echo '<script>

			 	swal({
			 		type: "error",
			 		title:"¡tas bien pendejo!",
			 		showConfirmButton:true,
			 		confirmButtonText: "Cerrar",
			 		closeOnConfirm: false
			 		}).then((result)=>{

			 			if(result.value){
			 				window.location = "inscripcion";
			 			}



			 			});


			 	</script>';

			 }
		}
	}

	static public function ctrBuscar(){
 	$tabla ="cat_alumnos";

		$respuesta = MvcModelo::MdlMostrarUsuario($tabla, $item,$valor);

		return $respuesta;


	
	}


	static public function valida_user_controlador($id_user){

			if (isset($_POST["validarusuario"])) {
				header("locatio:index.php?go=puto_go");
			$id_user= $_POST["validarusuario"];

			$respuesta=MvcModelo::valida_user_modelo($id_user, "cat_alumnos");

			if ($respuesta["icodigoalumno"]==$_POST["validarusuario"]) {
				echo "YA EXISTE";
			}
			else{
				echo "NO EXISTE";
			}

	}

	}


}

	
