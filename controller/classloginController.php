<?php 
require_once 'model/classlogin.php';
class classloginController {
	//Definición de variables
	private $classlogin;
	private $idusuario;
	private $existe_usuario;
	private $puesto;
	private $acceso;

	function __construct() {
		$this->classlogin =  new classlogin();
	}

	public function index() {
		require_once 'view/login.php';
	}

	public function login(){
		if ($_POST) {
			$this->classlogin->setAtributo('usuario', $_POST['usuario']);
			$this->classlogin->setAtributo('clave', $_POST['clave']);
			$idusuario 		= (int)$this->classlogin->obtUsaurioID($_POST['usuario'],$_POST['clave']); 
			//$existe_usuario = $this->classlogin->existeUsuario($idusuario, $_POST['usuario'], $_POST['clave']);
			echo $idusuario;
			//echo $existe_usuario;
			if ($idusuario == NULL) {
				echo "<script> alertify.alert('Alerta','El ID del usuario no existe');</script>";
				?>
				 <script>
				 	alertify.alert('Alerta','El ID del usuario no existe');
				 </script>
				<?php	
			} 
			else {
				/*if ($existe_usuario == 'S') {
					?>
					<script>
						alertify.alert('Alerta','Sí existe usuario');
					</script>
					<?php
				} 
				else {
					?>
					<script>
						alertify.alert('Alerta','No existe usuario');
					</script>
					<?php
				}*/
			}
		}
	}
}
?>