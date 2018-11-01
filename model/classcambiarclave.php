<?php 
require_once 'conexion.php';
class classcambiarclave extends Conexion
{
	//private $id;
	private $correo;
	private $usuario;
	private $clave;

	private $conexion;
	function __construct()
	{
		$this->conexion = new Conexion();
	}

	public function setAtributo($nombre, $valor){
		$this->$nombre = ucfirst(strtolower($valor));
	}

	public function getAtributo($nombre){
		return $this->$nombre;
	}

	public function cambiar_clave($correo,$usuario,$clave)
	{
		$sql = "CALL sp_cd_cambiarclave('".$correo."','".$usuario."','".$clave."');";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}

}
 ?>