<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>CandyDescu</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
</head>
<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <center>
                                <strong>
                                    <h4>
                                    CandyDescu
                                    </h4>
                                </strong>
                            </center>
                        <form class="form-signin" action="?c=classcambiarclave&m=cambiar_clave" method="post" accept-charset="UTF-8" role="form">
                            <fieldset>
                                <label class="panel-login">
                                    <div class="login_result"></div>
                                </label>
                                <input class="form-control" placeholder="Correo" id="correo" name="correo" type="text">
                                <input class="form-control" placeholder="Usuario" id="usuario" name="usuario" type="text">
                                <input class="form-control" placeholder="Contraseña" id="clave" name="clave" type="password">
                                <br>
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" id="submit" value="Enviar">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
	    <div class="container-fluid">
	        <div class="text-center">
	          <small>Derechos Reservados 2018</small>
	        </div>
	    </div>
	</footer>
    <script src="assets/alertifyjs/alertify.min.js"></script>
	<script src="assets/bootstrap/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>