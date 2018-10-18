<?php 
require_once 'conexion.php';

class classpuestos  extends Conexion
{
	private $cd_usu_idpuesto;
	private $cd_descripcion_pues;

	private $conexion;
	
	function __construct()
	{
		$this->conexion = new Conexion();
	}
	
	public function setAtributo($cd_descripcion_pues, $valor)
	{
		$this->$cd_descripcion_pues = ucfirst(strtolower($valor)); 
	}

	public function getAtributo($cd_descripcion_pues)
	{
		return $this->$cd_descripcion_pues;
	}

	public function buscar($cd_usu_idpuesto)
	{
		$sql = "CALL sp_cd_puestos_buscar ('".$cd_usu_idpuesto."');";
		$result = $this->conexion->consultaRetorno($sql);
		$classpuestos = $this->convertToclasspuestos($result);
		return $classpuestos;
	}

	public function listar()
	{
		$sql = "CALL sp_cd_puestos_listar();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}

	public function guardar()
	{
		$sql = "CALL sp_cd_puestos_guardar('$this->cd_usu_idpuesto','$this->cd_descripcion_pues');";
		$this->conexion->consultaSimple($sql);
	}

	public function actualizar()
	{
		$sql = "CALL sp_cd_puestos_editar('$this->cd_usu_idpuesto','$this->cd_descripcion_pues');";
		$this->conexion->consultaSimple($sql);
	}

	public function eliminar()
	{
		$sql = "CALL sp_cd_puestos_eliminar('$this->cd_usu_idpuesto');";
		$this->conexion->consultaSimple($sql);
	}

	public function convertToclasspuestos($result)
	{
		$classpuestos = new classpuestos();
		while ($row = mysqli_fetch_array($result)) {
			$classpuestos->setAtributo('cd_usu_idpuesto',$row[0]);
			$classpuestos->setAtributo('cd_descripcion_pues',$row[1]);
		}
		return $classpuestos;
	}
}
 ?>