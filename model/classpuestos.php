<?php 
require_once 'conexion.php';

class classpuestos  extends Conexion
{
	private $CDIDPUES;
	private $CDPUESTO;

	private $conexion;
	
	function __construct()
	{
		$this->conexion = new Conexion();
	}
	
	public function setAtributo($CDPUESTO, $valor)
	{
		$this->$CDPUESTO = ucfirst(strtolower($valor)); 
	}

	public function getAtributo($CDPUESTO)
	{
		return $this->$CDPUESTO;
	}

	public function buscar($CDIDPUES)
	{
		$sql = "CALL sp_cd_puestos_buscar ('".$CDIDPUES."');";
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
		$sql = "CALL sp_puestos_guardar('$this->CDIDPUES','$this->CDPUESTO');";
		$this->conexion->consultaSimple($sql);
	}

	public function actualizar()
	{
		$sql = "CALL sp_cd_puestos_editar('$this->CDIDPUES','$this->CDPUESTO');";
		$this->conexion->consultaSimple($sql);
	}

	public function eliminar()
	{
		$sql = "CALL sp_cd_puestos_eliminar('$this->CDIDPUES');";
		$this->conexion->consultaSimple($sql);
	}

	public function convertToclasspuestos($result)
	{
		$classpuestos = new classpuestos();
		while ($row = mysqli_fetch_array($result)) {
			$classpuestos->setAtributo('CDIDPUES',$row[0]);
			$classpuestos->setAtributo('CDPUESTO',$row[1]);
		}
		return $classpuestos;
	}
}
 ?>