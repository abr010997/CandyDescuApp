<?php 

require_once 'model/classCliente.php';
class classClienteController
{
	private $classCliente;
	function __construct()
	{
		$this->classCliente = new classCliente();
	}
	public function index()
	{
		require_once 'view/header_app.php';
		require_once 'view/classCliente/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		if ($_POST) {
			$this->classCliente->setAtributo('cd_cli_cedula',$_POST['cd_cli_cedula']);
			$this->classCliente->setAtributo('cd_cli_nombre',$_POST['cd_cli_nombre']);
			$this->classCliente->setAtributo('cd_cli_ape1',$_POST['cd_cli_ape1']);
			$this->classCliente->setAtributo('cd_cli_ape2',$_POST['cd_cli_ape2']);
			$this->classCliente->guardar();
			header('location:?c=classCliente&m=index');
		}
		else{
			require_once 'view/header_app.php';
			require_once 'view/classCliente/agregar.php';
			require_once 'view/footer.php';
		}
	}
	 public function editar()
	 {
	 	if ($_POST) {
	 		$this->classCliente->setAtributo('cd_cli_cedula',$_POST['cd_cli_cedula']);
			$this->classCliente->setAtributo('cd_cli_nombre',$_POST['cd_cli_nombre']);
			$this->classCliente->setAtributo('cd_cli_ape1',$_POST['cd_cli_ape1']);
			$this->classCliente->setAtributo('cd_cli_ape2',$_POST['cd_cli_ape2']);
	 		$this->classCliente->actualizar();
			header('location:?c=classCliente&m=index');
	 	}
	 	else{
			$this->classCliente = $this->classCliente->buscar($_REQUEST['id']);
			require_once 'view/header_app.php';
			require_once 'view/classCliente/editar.php';
			require_once 'view/footer.php';		}
	 	}

	public function eliminar()
	{
		$this->classCliente->setAtributo('cd_cli_cedula',$_REQUEST['id']);
		$this->classCliente->eliminar();
		header('location:?c=classCliente&m=index');
	}

	public function ver()
	{
		$this->classCliente = $this->classCliente->buscar($_REQUEST['id']);
		require_once 'view/header_app.php';
		require_once 'view/classCliente/ver.php';
		require_once 'view/footer.php';
	}
}
?>