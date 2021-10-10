<?php
require_once "../controlador/controlador.php";
require_once "../modelo/modelo.php";

class AjaxUsuario{
	public  $idUsuario;

	public function ajaXEditarUsuario(){

		$item = "icodigoalumno";
		$valor =$this->idUsuario;
	$respuesta = MvcControlador::ctrMostrarAlumno($item, $valor);
	echo json_encode($respuesta); 


	}

	/*-----No repetir id-----*/
public $validarUsuario;
public function ajaxValidarUsuario(){
	$item = "icodigoalumno";
	$valor = $this->validarUsuario;

	$respuesta = MvcControlador::ctrMostrarAlumno($item, $valor);
	echo json_encode($respuesta); 

}

	public function valida_user(){
		
		if (isset($_POST["validarusuario"])) {
			$id_user = $_POST["validarusuario"];

			$respuesta=MvcControlador::valida_user_controlador($id_user);
			
		}
	}


}  

$res = new AjaxUsuario();
$res -> valida_user();









//if (isset($_POST["validarusuario"])) {
//	$valUsuario = new AjaxUsuario();
//	$valUsuario -> validarUsuario = $_POST["validarusuario"];
//	$valUsuario ->ajaxValidarUsuario();

	# code...
//}


//if (isset($_POST["idUsuario"])) {
//	$editar = new AjaxUsuario();
//	$editar -> idUsuario = $_POST["idUsuario"];
//	$editar -> ajaXEditarUsuario();
//}
