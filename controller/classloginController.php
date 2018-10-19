<?php 
require_once 'model/classlogin.php';
?>
<link rel="stylesheet" href="assets/alertifyjs/css/alertify.min.css">
<script src="assets/alertifyjs/alertify.min.js"></script>
<?php
//require_once 'view/login.php';
class classloginController {
	//Definición de variables
	private $classlogin;
	private $idusuario;
	private $existe_usuario;
	private $puesto;
	private $acceso;
	private $claveerronea;

	function __construct() {
		$this->classlogin =  new classlogin();
	}

	public function index() {
		require_once 'view/login.php';
	}

	public function login(){
		if ($_POST['submit']) {
			if ($_POST) {
				$this->classlogin->setAtributo('usuario', $_POST['usuario']);
				$this->classlogin->setAtributo('clave', $_POST['clave']);
				$idusuario 		= $this->classlogin->obtUsaurioID($_POST['usuario'], $_POST['clave']);
				$existe_usuario = $this->classlogin->existeUsuario($idusuario[0], $_POST['usuario'], $_POST['clave']);
				if ($idusuario == NULL) {
					?>
					 <script>
					 	alertify.alert('Alerta','El ID del usuario no existe');
					 </script>
					<?php
				} 
				else {
					echo "estas aca";
					?>
					 <script>
					 	alertify.alert('Alerta','Exite: '.$existe_usuario[0]);
					 </script>
					<?php
					if ($existe_usuario == 'S') {
						echo "ahora aca";
						header('location: ?c=classprincipal&m=index');
					} 
					else {
						?>
						<script>
							alertify.alert('Alerta','No existe usuario');
						</script>
						<?php
					}
				}
			}
		}
	}

	public function test_login(){
		if (isset($_POST["submit"])) {
			try{
				if (empty($_POST["usuario"] || $_POST["clave"])) {
					throw new Exception("Usuario y Clave son incorrectos");
				} else {
					if ($_POST) {
						$this->classlogin->setAtributo('usuario',$_POST['usuario']);
						$this->classlogin->setAtributo('clave',$_POST['clave']);
						//$this->classlogin->entrar($_POST['usuario'],$_POST['clave']);
						if ($this->classlogin->entrar($_POST['usuario'],$_POST['clave']) == true) {
							session_start();
							if ($_SESSION['idpuesto'] == 1) {
								header("Location: ?c=classprincipal&m=index");	
							} else if ($_SESSION['idpuesto'] == 2){
								header("Location: ?c=classprincipal&m=index");
							} else  if ($_SESSION['idpuesto'] == 3) {
								header("Location: ?c=classprincipal&m=index");								
							} else if ($_SESSION['idpuesto'] == 4) {
								header("Location: ?c=classprincipal&m=index");
							} else {
								header("Location: ?c=class03puestos&m=index");
							}
						} else {
							?>
							<script>
								alert("Usuario y Clave son incorrectos");
								location.href = "?c=classlogin&m=index";
							</script>
							<?php
						}
					} else {
						require_once 'view/login.php';
					}
				}
			}
			catch (Exception $e) {
				?>
				<script>
					alert("Usuario y Clave son incorrectos");
					location.href = "?c=classlogin&m=index";
				</script>
				<?php
		    }
		}
	}
}
?>