
    <center><h2>Editar usuario: <?php echo $this->classUsuarios->getAtributo('cd_usu_nombre');?> </h2></center>
    
      <form action="?c=classUsuarios&m=editar" method="post">
      <div class="form-group">
        <label for="cd_usu_cedula">Cédula:</label>
        <input type="text" class="form-control" id="cd_usu_cedula" name="cd_usu_cedula" value="<?php echo $this->classUsuarios->getAtributo('cd_usu_cedula');?>" readonly>
      </div>
      <div class="form-group">
        <label for="cd_usu_nombre">Nombre:</label>
        <input type="text" class="form-control" id="cd_usu_nombre" name="cd_usu_nombre" value="<?php echo $this->classUsuarios->getAtributo('cd_usu_nombre');?> " >
      </div>
      <div class="form-group">
        <label for="cd_usu_ape1">Primer Apellido:</label>
        <input type="text" class="form-control" id="cd_usu_ape1" name="cd_usu_ape1" value="<?php echo $this->classUsuarios->getAtributo('cd_usu_ape1');?> ">
      </div>
      <div class="form-group">
        <label for="cd_usu_ape2">Segundo Apellido:</label>
        <input type="text" class="form-control" id="cd_usu_ape2" name="cd_usu_ape2" value="<?php echo $this->classUsuarios->getAtributo('cd_usu_ape2');?> ">
      </div>

       <div class="form-group">
        <label for="cd_usu_telefono">Teléfono:</label>
        <input type="text" class="form-control" id="cd_usu_telefono" name="cd_usu_telefono" value="<?php echo $this->classUsuarios->getAtributo('cd_usu_telefono');?> ">
      </div>
      
       <div class="form-group">
        <label for="cd_usu_correo">Correo: </label>
        <input type="text" class="form-control" id="cd_usu_correo" name="cd_usu_correo" value="<?php echo $this->classUsuarios->getAtributo('cd_usu_correo');?> ">
      </div>
         <div class="form-group">
        <label for="cd_usu_idpuesto">Puesto: </label>
        <input type="text" class="form-control" id="cd_usu_idpuesto" name="cd_usu_idpuesto" value="<?php echo $this->classUsuarios->getAtributo('cd_usu_idpuesto');?> ">
      </div>

      <button type="submit" class="btn btn-success">Editar Usuario</button> 
      <a href="?c=classUsuarios&m=index" class="btn btn-danger" role="button">Regresar</a>    
    </form>
