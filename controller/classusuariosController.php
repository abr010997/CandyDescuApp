<?php 
require_once 'model/classusuarios.php';
class classusuariosController
{
	private $classusuarios;
	function __construct()
	{
		$this->classusuarios = new classusuarios();
	}

	public function index()
	{
		require_once 'view/header_app.php';
		require_once 'view/classusuarios/index.php';
		require_once 'view/footer.php';
	}

public function agregar()
{
	if ($_POST) {
	$this->classusuarios->setAtributo('cd_usu_cedula',$_POST['cd_usu_cedula']);
	$this->classusuarios->setAtributo('cd_usu_nombre',$_POST['cd_usu_nombre']);
	$this->classusuarios->setAtributo('cd_usu_ape1',$_POST['cd_usu_ape1']);
	$this->classusuarios->setAtributo('cd_usu_ape2',$_POST['cd_usu_ape2']);
	$this->classusuarios->setAtributo('cd_usu_telefono',$_POST['cd_usu_telefono']);
	$this->classusuarios->setAtributo('cd_usu_correo',$_POST['cd_usu_correo']);
	$this->classusuarios->setAtributo('cd_usu_usuario',$_POST['cd_usu_usuario']);
	$this->classusuarios->setAtributo('cd_usu_contrasena',$_POST['cd_usu_contrasena']);
	$this->classusuarios->setAtributo('cd_usu_idpuesto',$_POST['cd_usu_idpuesto']);
		$this->classusuarios->guardar();
		header('location:?c=classusuarios&m=index');
	}
		else{
			require_once 'view/header_app.php';
			require_once 'view/classusuarios/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->classusuarios->setAtributo('cd_usu_cedula',$_POST['cd_usu_cedula']);
			$this->classusuarios->setAtributo('cd_usu_nombre',$_POST['cd_usu_nombre']);
			$this->classusuarios->setAtributo('cd_usu_ape1',$_POST['cd_usu_ape1']);
			$this->classusuarios->setAtributo('cd_usu_ape2',$_POST['cd_usu_ape2']);
			$this->classusuarios->setAtributo('cd_usu_telefono',$_POST['cd_usu_telefono']);
			$this->classusuarios->setAtributo('cd_usu_correo',$_POST['cd_usu_correo']);
			$this->classusuarios->setAtributo('cd_usu_idpuesto',$_POST['cd_usu_idpuesto']);
			$this->classusuarios->actualizar();
			header('location:?c=classusuarios&m=index');
		}
		else{
			$this->classusuarios = $this->classusuarios->buscar($_REQUEST['id']);
			require_once 'view/header_app.php';
			require_once 'view/classusuarios/editar.php';
			require_once 'view/footer.php';
		}
	}

	public function eliminar()
	{
		$this->classusuarios->setAtributo('cd_usu_cedula',$_REQUEST['id']);
		$this->classusuarios->eliminar();
		header('location:?c=classusuarios&m=index');
	}

	public function ver()
	{
		$this->classusuarios = $this->classusuarios->buscar($_REQUEST['id']);
		require_once 'view/header_app.php';
		require_once 'view/classusuarios/ver.php';
		require_once 'view/footer.php';
	}
}
?>