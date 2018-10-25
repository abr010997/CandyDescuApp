<br>
<div class="row">
<div class="col-sm-offset-4 col-sm-4">  
			<div class="panel panel-default">
				<div class="panel-heading">Listado de  usuarios:</div>
				<div class="panel-body">
					<ul class="list-group">
					<li class="list-group-item"><strong>Cédula: </strong><?php echo $this->classusuarios->getAtributo('cd_usu_cedula');?></li>
					<li class="list-group-item"><strong>Nombre: </strong><?php echo $this->classusuarios->getAtributo('cd_usu_nombre');?></li>
					<li class="list-group-item"><strong>Primer Apellido: </strong><?php echo $this->classusuarios->getAtributo('cd_usu_ape1');?></li>
					<li class="list-group-item"><strong>Segundo Apellido: </strong><?php echo $this->classusuarios->getAtributo('cd_usu_ape2');?></li>
					<li class="list-group-item"><strong>Teléfono: </strong><?php echo $this->classusuarios->getAtributo('cd_usu_telefono');?></li>
					<li class="list-group-item"><strong>Correo: </strong><?php echo $this->classusuarios->getAtributo('cd_usu_correo');?></li>
					<li class="list-group-item"><strong>Puesto: </strong><?php echo $this->classusuarios->getAtributo('cd_usu_idpuesto');?></li>
						
					</ul>
					<a href="?c=classusuarios&m=index" class="btn btn-danger" role="button"><span class="
glyphicon glyphicon-triangle-left"></span> Regresar</a> 

				</div>
			</div>
			</div>
		</div>
     