<?php 
require_once "conexion.php";

class MvcModelo{

	
static public function MdlMostrarUsuario($tabla, $item, $valor){
			if ($item != null) {

		$stmt =Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item,$valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();
			}else{
				$stmt =Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

		         return $stmt -> fetchAll();
			}	

		$stmt -> close();

		$stmt = null;
	
	}

	static public function MdlMostrarInscripcion($tabla, $item,$valor){
		if ($item != null) {

		$stmt =Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item,$valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();
			}else{
				$stmt =Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

		         return $stmt -> fetchAll();
			}	

		$stmt -> close();

		$stmt = null;


	}





	static public function MdlMostrarMateria($tabla,$item, $valor){

		if ($item != null) {

		$stmt =Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item,$valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();
			}else{
				$stmt =Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

		         return $stmt -> fetchAll();
			}

		

		$stmt -> close();

		$stmt = null;
	
}

	static public function mldAgregarAlumno($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(icodigoalumno, vchnombre, vchapellidos, dtfechanac ) VALUES (:icodigoalumno, :vchnombre, :vchapellidos, :dtfechanac)");

		$stmt->bindParam(":icodigoalumno",$datos["clave"],PDO::PARAM_INT);
		$stmt->bindParam(":vchnombre",$datos["nombre"],PDO::PARAM_STR);
		$stmt->bindParam(":vchapellidos",$datos["apellidos"],PDO::PARAM_STR);
		$stmt->bindParam(":dtfechanac",$datos["naci"],PDO::PARAM_STR);


		if ($stmt->execute()) {
			return "ok";

		}else{
			return "error";
		}

		$stmt->close();

		$stmt=null;
	}


	static public function mldAgregarMateria($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(vchcodigomateria, vchmateria) VALUES (:vchcodigomateria, :vchmateria)");

		$stmt->bindParam(":vchcodigomateria",$datos["CodigoM"],PDO::PARAM_STR);
		$stmt->bindParam(":vchmateria",$datos["NombreM"],PDO::PARAM_STR);



		if ($stmt->execute()) {
			return "ok";

		}else{
			return "error";
		}

		$stmt->close();

		$stmt=null;

	}


	static public function mldInscripcion($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(fcalificacion, cat_alumnos_icodigoalumno, cat_materias_vchcodigomateria) VALUES (:fcalificacion, :cat_alumnos_icodigoalumno, :cat_materias_vchcodigomateria)");

		$stmt->bindParam(":fcalificacion",$datos["Cali"],PDO::PARAM_INT);
		$stmt->bindParam(":cat_alumnos_icodigoalumno",$datos["claveA"],PDO::PARAM_INT);
		$stmt->bindParam(":cat_materias_vchcodigomateria",$datos["claveM"],PDO::PARAM_STR);

			if ($stmt->execute()) {
			return "ok";

		}else{
			return "error";
		}

		$stmt->close();

		$stmt=null;

	}

	static public function busqueda(){
		$stmt = Conexion::conectar()->prepare("SELECT cat_rel_alumno_materia.cat_alumnos_icodigoalumno, cat_alumnos.vchnombre,cat_alumnos.vchapellidos,cat_alumnos.dtfechanac,cat_materias.vchcodigomateria,cat_materias.vchmateria, cat_rel_alumno_materia.fcalificacion FROM cat_rel_alumno_materia INNER JOIN cat_alumnos ON cat_rel_alumno_materia.cat_alumnos_icodigoalumno = cat_alumnos.icodigoalumno INNER JOIN cat_materias ON cat_rel_alumno_materia.cat_materias_vchcodigomateria=cat_materias.vchcodigomateria");

		$stmt -> execute();
	return $stmt -> fetchAll();

	$stmt -> close();

	}

	static public function valida_user_modelo($id_user, $tabla){

		$stmt=Conexion::conectar()->prepare("SELECT*FROM $tabla WHERE icodigoalumno LIKE :id_user");

		$stmt->bindParam(":id_user", $id_user, PDO::PARAM_INT);

		$stmt->execute();

		return $stmt->fetch();



	}
}