	<div class="row">
			<div  class="panel panel-default">
				<div class="panel-heading">Detalle del Puesto</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><strong>Código del Puesto: </strong><?php echo $this->classpuestos->getAtributo('CDIDPUES');?></li>
						<li class="list-group-item"><strong>Nombre del puesto: </strong><?php echo $this->classpuestos->getAtributo('CDPUESTO');?></li>
						
					</ul>
					<a href="?c=classpuestos&m=index" class="btn btn-danger" role="button">Regresar</a>  

				</div>
			</div>
		</div>
   
