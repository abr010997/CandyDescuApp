
    <center>
      <h2>Editar puesto: <?php echo $this->classpuestos->getAtributo('cd_descripcion_pues');?> </h2>
    </center>
   
        <form action="?c=classpuestos&m=editar" method="post">
      <div class="col-sm-offset-4 col-sm-4">
      <div class="form-group">
        <label for="cd_usu_idpuesto">Código del puesto:</label>
        <input type="text" class="form-control" id="cd_usu_idpuesto" name="cd_usu_idpuesto" value="<?php echo $this->classpuestos->getAtributo('cd_usu_idpuesto');?>" readonly>
      </div>
      <div class="form-group">
        <label for="cd_descripcion_pues">Nombre del puesto</label>
        <input type="text" class="form-control" id="cd_descripcion_pues" name="cd_descripcion_pues" value="<?php echo $this->classpuestos->getAtributo('cd_descripcion_pues');?> " >
      </div>
      
      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span> Editar Puesto</button> 
      <a href="?c=classpuestos&m=index" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
      
      </div>
    </form>
  
