<?php 
require_once 'model/classcambiarclave.php';
?>
<link rel="stylesheet" href="assets/alertifyjs/css/alertify.min.css">
<script src="assets/alertifyjs/alertify.min.js"></script>
<?php 
//require_once 'view/login.php';
class classcambiarclaveController {
	//Definición de variables
	private $classcambiarclave;

	function __construct() {
		$this->classcambiarclave =  new classcambiarclave();
	}

	public function index() {
		require_once 'view/cambiarclave.php';
	}

	public function cambiar_clave(){
		if (isset($_POST["submit"])) {
			try{
				if (empty($_POST["correo"] || $_POST["usuario"] || $_POST["clave"])) {
					throw new Exception("correo y usuario son incorrectos");
				} else {
					if ($_POST) {
						$this->classcambiarclave->setAtributo('correo',$_POST['correo']);
						$this->classcambiarclave->setAtributo('usuario',$_POST['usuario']);
						$this->classcambiarclave->setAtributo('clave',$_POST['clave']);
						$this->classcambiarclave->cambiar_clave($_POST['correo'],$_POST['usuario'],$_POST["clave"]);
						header('location: ?c=classlogin&m=index');
					} else {
						require_once 'view/cambiarclave.php';
					}
				}
			}
			catch (Exception $e) {
				?>
				<script>
					alert("correo y usuario estan vacios");
					location.href = "?c=classcambiarclave&m=index";
				</script>
				<?php
		    }
		}
	}
}
?>