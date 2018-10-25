<br>
	<div class="row">
	<div class="col-sm-offset-4 col-sm-4">  
			<div  class="panel panel-default">
				<div class="panel-heading">Detalle del cliente</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><strong>Cédula: </strong><?php echo $this->classCliente->getAtributo('cd_cli_cedula');?></li>
						<li class="list-group-item"><strong>Nombre : </strong><?php echo $this->classCliente->getAtributo('cd_cli_nombre');?></li>
						<li class="list-group-item"><strong>Apellido 1 : </strong><?php echo $this->classCliente->getAtributo('cd_cli_ape1');?></li>
						<li class="list-group-item"><strong>Apellido 2 : </strong><?php echo $this->classCliente->getAtributo('cd_cli_ape2');?></li>	
					</ul>
					<a href="?c=classCliente&m=index" class="btn btn-danger" role="button">Regresar</a>  

				</div>
			</div>
		</div>
		</div>
   
