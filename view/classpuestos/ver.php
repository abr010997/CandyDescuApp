	<br>
	<div class="row">
	<div class="col-sm-offset-4 col-sm-4">  
			<div  class="panel panel-default">
				<div class="panel-heading">Detalle del puesto</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><strong>Código del puesto: </strong><?php echo $this->classpuestos->getAtributo('cd_usu_idpuesto');?></li>
						<li class="list-group-item"><strong>Nombre del puesto: </strong><?php echo $this->classpuestos->getAtributo('cd_descripcion_pues');?></li>
						
					</ul>
					<a href="?c=classpuestos&m=index" class="btn btn-danger" role="button"><span class="
glyphicon glyphicon-triangle-left"></span> Regresar</a>  

				</div>
			</div>
			</div>
		</div>
   
