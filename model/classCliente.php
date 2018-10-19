<?php 
require_once 'conexion.php';

class classCliente  extends Conexion
{
	private $cd_cli_cedula;
	private $cd_cli_nombre;
	private $cd_cli_ape1;
	private $cd_cli_ape2;

	private $conexion;
	
	function __construct()
	{
		$this->conexion = new Conexion();
	}
	
	public function setAtributo($cd_cli_nombre, $valor)
	{
		$this->$cd_cli_nombre = ucfirst(strtolower($valor)); 
	}

	public function getAtributo($cd_cli_nombre)
	{
		return $this->$cd_cli_nombre;
	}


	public function buscar($cd_cli_cedula)
	{
		$sql = "CALL sp_cd_cliente_buscar ('".$cd_cli_cedula."');";
		$result = $this->conexion->consultaRetorno($sql);
		$cliente = $this->convertToclassCliente($result);
		return $cliente;
	}

	public function listar()
	{
		$sql = "CALL sp_cd_cliente_listar ();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}

	public function guardar()
	{
		$sql = "CALL sp_cd_cliente_guardar ('$this->cd_cli_cedula','$this->cd_cli_nombre','$this->cd_cli_ape1','$this->cd_cli_ape2');";
		$this->conexion->consultaSimple($sql);
	}

	public function actualizar()
	{
		$sql = "CALL sp_cd_cliente_editar ('$this->cd_cli_cedula','$this->cd_cli_nombre','$this->cd_cli_ape1','$this->cd_cli_ape2');";
		$this->conexion->consultaSimple($sql);
	}

	public function eliminar()
	{
		$sql = "CALL sp_cd_cliente_eliminar ('$this->cd_cli_cedula');";
		$this->conexion->consultaSimple($sql);
	}

	public function convertToclassCliente($result)
	{
		$classCliente = new classCliente();
		while ($row = mysqli_fetch_array($result)) {
			$classCliente->setAtributo('cd_cli_cedula',$row[0]);
			$classCliente->setAtributo('cd_cli_nombre',$row[1]);
			$classCliente->setAtributo('cd_cli_ape1',$row[2]);
			$classCliente->setAtributo('cd_cli_ape2',$row[3]);
		}
		return $classCliente;
	}
}
 ?>