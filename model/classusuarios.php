<?php 
require_once 'conexion.php';

class classusuarios extends Conexion
{
	private $cd_usu_cedula;
	private $cd_usu_nombre;
	private $cd_usu_ape1;
	private $cd_usu_ape2;
	private $cd_usu_telefono;
	private $cd_usu_correo;
	private $cd_usu_usuario;
	private $cd_usu_contrasena;
	private $cd_usu_idpuesto;



	private $conexion;
	
	function __construct()
	{
		$this->conexion = new Conexion();
	}
	
	public function setAtributo($cd_usu_nombre, $valor)
	{
		$this->$cd_usu_nombre = ucfirst(strtolower($valor)); 
	}

	public function getAtributo($cd_usu_nombre)
	{
		return $this->$cd_usu_nombre;
	}

	public function buscar($cd_usu_cedula)
	{
		$sql = "CALL sp_cd_usuario_info_tb_buscar('".$cd_usu_cedula."')";
		$result = $this->conexion->consultaRetorno($sql);
		$classusuarios = $this->convertToclassusuarios($result);
		return $classusuarios;
	}

	public function listar()
	{
		$sql = "CALL sp_cd_usuario_info_tb_listar();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}

	public function guardar()
	{
		$sql = "call sp_cd_usuario_info_tb_guardar('$this->cd_usu_cedula','$this->cd_usu_nombre','$this->cd_usu_ape1','$this->cd_usu_ape2',
	'$this->cd_usu_telefono','$this->cd_usu_correo','$this->cd_usu_usuario','$this->cd_usu_contrasena','$this->cd_usu_idpuesto');";	

		$this->conexion->consultaSimple($sql);
	}

	public function actualizar()
	{
		$sql = "call sp_cd_usuario_info_tb_modificar('$this->cd_usu_cedula','$this->cd_usu_nombre','$this->cd_usu_ape1','$this->cd_usu_ape2','$this->cd_usu_telefono','$this->cd_usu_correo','$this->cd_usu_idpuesto')";	

		$this->conexion->consultaSimple($sql);
	}

	public function eliminar()
	{
		$sql = "call sp_cd_usuario_info_tb_eliminar('$this->cd_usu_cedula')";	
		$this->conexion->consultaSimple($sql);
	}

	public function convertToclassusuarios($result)
	{
		$classusuarios = new classusuarios();
		while ($row = mysqli_fetch_array($result)) {
			$classusuarios->setAtributo('cd_usu_cedula',$row[0]);
			$classusuarios->setAtributo('cd_usu_nombre',$row[1]);
			$classusuarios->setAtributo('cd_usu_ape1',$row[2]);
			$classusuarios->setAtributo('cd_usu_ape2',$row[3]);
			$classusuarios->setAtributo('cd_usu_telefono',$row[4]);
			$classusuarios->setAtributo('cd_usu_correo',$row[5]);
			$classusuarios->setAtributo('cd_usu_idpuesto',$row[6]);
		}
		return $classusuarios;
	}
}