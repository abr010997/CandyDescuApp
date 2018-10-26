<?php 

require_once 'model/classpuestos.php';
class classpuestosController
{
	private $classpuestos;
	function __construct()
	{
		$this->classpuestos = new classpuestos();
	}
	public function index()
	{
		require_once 'view/header_app.php';
		require_once 'view/classpuestos/index.php';
		require_once 'view/footer.php';
	}
	public function agregar()
	{
		if ($_POST) {
			$this->classpuestos->setAtributo('cd_usu_idpuesto',$_POST['cd_usu_idpuesto']);
			$this->classpuestos->setAtributo('cd_descripcion_pues',$_POST['cd_descripcion_pues']);
			$this->classpuestos->guardar();
			header('location:?c=classpuestos&m=index');
		}
		else{
			require_once 'view/header_app.php';
			require_once 'view/classpuestos/agregar.php';
			require_once 'view/footer.php';
		}
	}
	public function editar()
	{
		if ($_POST) {
			$this->classpuestos->setAtributo('cd_usu_idpuesto',$_POST['cd_usu_idpuesto']);
			$this->classpuestos->setAtributo('cd_descripcion_pues',$_POST['cd_descripcion_pues']);
			$this->classpuestos->actualizar();
			header('location:?c=classpuestos&m=index');
		}
		else{
			$this->classpuestos = $this->classpuestos->buscar($_REQUEST['id']);
			require_once 'view/header_app.php';
			require_once 'view/classpuestos/editar.php';
			require_once 'view/footer.php';		}
		}

	public function eliminar()
	{
		$this->classpuestos->setAtributo('cd_usu_idpuesto',$_REQUEST['id']);
		$this->classpuestos->eliminar();
		header('location:?c=classpuestos&m=index');
	}

	public function ver()
	{
		$this->classpuestos = $this->classpuestos->buscar($_REQUEST['id']);
		require_once 'view/header_app.php';
		require_once 'view/classpuestos/ver.php';
		require_once 'view/footer.php';
	}
	
}
?>