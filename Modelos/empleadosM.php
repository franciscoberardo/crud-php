<?php

require_once "conexionBD.php";

class EmpleadosM extends ConexionBD{

	static public function RegistrarEmpleadosM($datosC,$tablaBD){

		$pdo = ConexionBD::cBD()->prepare("insert into $tablaBD(nombre,apellido,email,puesto,salario) values(:nombre,:apellido,:email,:puesto,:salario)");

		$pdo -> bindParam (":nombre", $datosC["nombre"], PDO::PARAM_STR);
		$pdo -> bindParam (":apellido", $datosC["apellido"], PDO::PARAM_STR);
		$pdo -> bindParam (":email", $datosC["email"], PDO::PARAM_STR);
		$pdo -> bindParam (":puesto", $datosC["puesto"], PDO::PARAM_STR);
		$pdo -> bindParam (":salario", $datosC["salario"], PDO::PARAM_STR);

		if($pdo -> execute()){
			return "BIEN";
		}else{
			return "MAL";
		}

		$pdo->close();
	}
	static public function MostrarEmpleadosM($tablaBD){


		$pdo = ConexionBD::cBD()->prepare("select * from $tablaBD");

		$pdo -> execute();

		return $pdo->fetchAll();

		$pdo->close();
	}

	static public function EditarEmpleadosM($datosC,$tablaBD){

		$pdo = ConexionBD::cBD()->prepare("select id,nombre,apellido,email,puesto,salario from $tablaBD where id=:id");

		$pdo -> bindParam (":id", $datosC, PDO::PARAM_INT);

		$pdo -> execute();

		return $pdo->fetch();
	}

	static public function ActualizarEmpleadosM($datosC,$tablaBD){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD set nombre= :nombre,apellido= :apellido,email=:email,puesto= :puesto,salario= :salario where id=:id");

		$pdo -> bindParam (":id", $datosC["id"], PDO::PARAM_INT);
		$pdo -> bindParam (":nombre", $datosC["nombre"], PDO::PARAM_STR);
		$pdo -> bindParam (":apellido", $datosC["apellido"], PDO::PARAM_STR);
		$pdo -> bindParam (":email", $datosC["email"], PDO::PARAM_STR);
		$pdo -> bindParam (":puesto", $datosC["puesto"], PDO::PARAM_STR);
		$pdo -> bindParam (":salario", $datosC["salario"], PDO::PARAM_STR);

		if($pdo -> execute()){
			return "BIEN";
		}else{
			return "MAL";
		}

		$pdo->close();
	}

	static public function BorrarEmpleadosM($datosC,$tablaBD){

		$pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam (":id",$datosC,PDO::PARAM_INT);

		if($pdo -> execute()){
			return "BIEN";
		}else{
			return "MAL";
		}

		$pdo->close();
	}
}


?>