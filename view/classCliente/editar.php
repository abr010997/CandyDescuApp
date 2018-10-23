
    <center>
      <h2>Editar cliente: <?php echo $this->classCliente->getAtributo('cd_cli_nombre');?> </h2>
    </center>
   
        <form action="?c=classCliente&m=editar" method="post">
        <div class="col-sm-offset-4 col-sm-4">
      <div class="form-group">
        <label for="cd_cli_cedula">Cédula:</label>
        <input type="text" class="form-control" id="cd_cli_cedula" name="cd_cli_cedula" value="<?php echo $this->classCliente->getAtributo('cd_cli_cedula');?>" readonly>
      </div>
      <div class="form-group">
        <label for="cd_cli_nombre">Nombre :</label>
        <input type="text" class="form-control" id="cd_cli_nombre" name="cd_cli_nombre" value="<?php echo $this->classCliente->getAtributo('cd_cli_nombre');?> " >
      </div>
      <div class="form-group">
        <label for="cd_cli_ape1">Primer Apellido:</label>
        <input type="text" class="form-control" id="cd_cli_ape1" name="cd_cli_ape1" value="<?php echo $this->classCliente->getAtributo('cd_cli_ape1');?> " >
      </div>
      <div class="form-group">
        <label for="cd_cli_ape2">Segundo Apellido:</label>
        <input type="text" class="form-control" id="cd_cli_ape2" name="cd_cli_ape2" value="<?php echo $this->classCliente->getAtributo('cd_cli_ape2');?> " >
      </div>
      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span> Editar Puesto</button> 
      <a href="?c=classCliente&m=index" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>  
      </div>
    </form>
  
