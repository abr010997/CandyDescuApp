<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>CandyDescu</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="assets/alertifyjs/css/alertify.min.css">
</head>
<body>
    <!--<div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">        
                        <div class="row-fluid user-row">
                            <img src="assets/imagenes/candy.png" class="img-thumbnail img-responsive" alt="Conxole Admin">
                        </div>
                    </div>
                    <div class="panel-body">
                        <center>
                                <strong>
                                    <h4>
                                    CandyDescu
                                    </h4>
                                </strong>
                            </center>
                        <form class="form-signin" action="?c=classlogin&m=test_login" method="post" accept-charset="UTF-8" role="form">
                            <fieldset>
                                <label class="panel-login">
                                    <div class="login_result"></div>
                                </label>
                                <input class="form-control" placeholder="Usuario" id="usuario" name="usuario" type="text">
                                <input class="form-control" placeholder="Contraseña" id="clave" name="clave" type="password">
                                <p><a href="?c=classcambiarclave&m=index"> Cambiar clave?</a></p>
                                <br>
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" id="submit" value="Iniciar Sesión">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <div class="container">
        <h2>Modal Example</h2>
	    <div class="container-fluid">
	        <div class="text-center">
	          <small>Derechos Reservados 2018</small>
	        </div>
	    </div>
	</footer>-->
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand">CandyDescu</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?c=classlogin&m=index"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a onclick="iniciarSesion()"><span class="glyphicon glyphicon-log-in"></span> Login Modal</a></li>
      </ul>
    </div>
  </nav>
  <div class="container text-center">    
  <h3>¿Quiénes somos?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="assets/img/ventas.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Incremento en las ventas.</p>
    </div>
    <div class="col-sm-4"> 
      <img src="assets/img/tec.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Solución el la nube.</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
      <h2>VISIÓN</h2>
      <p>
      Ser la empresa líder en Latinoamérica y El Caribe en generar ventas a nuestros asociados implementando soluciones tecnológicas para atraer nuevos clientes.
      </p>
      </div>
      <div class="well">
      <h2>MISIÓN</h2>
      <p>
      Somos aliados estratégicos de las organizaciones que desean potenciar el aprovechamiento de las tecnologías de información, mediante el desarrollo e integración de soluciones especializadas para incrementar sus ventas de sus productos.      
     </p>
      </div>
    </div>
  </div>
</div><br>
  <div class="container-fluid ">
    <!-- Modal -->
    <div id="ModalLogin" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="panel panel-default">
                <div class="panel-heading">        
                    <div class="row-fluid user-row">
                        <img src="assets/imagenes/candy.png" class="img-responsive img-fluid" alt="Conxole Admin">
                    </div>
                </div>
                <h5 class="modal-title">
                    <center>
                        <strong>    
                            <h4>
                            CandyDescu
                            </h4>
                        </strong>
                    </center>
                </h5>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <form class="form-signin" action="?c=classlogin&m=test_login" method="post" accept-charset="UTF-8" role="form">
                            <fieldset>
                                <label class="panel-login">
                                    <div class="login_result"></div>
                                </label>
                                <input class="form-control" placeholder="Usuario" id="usuario" name="usuario" type="text">
                                <input class="form-control" placeholder="Contraseña" id="clave" name="clave" type="password">
                                <p><a href="?c=classcambiarclave&m=index"> Cambiar clave?</a></p>
                                <br>
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" id="submit" value="Iniciar Sesión">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <script src="assets/alertifyjs/alertify.min.js"></script>
	<script src="assets/bootstrap/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/js/iniciar.js"></script>
</body>
</html>