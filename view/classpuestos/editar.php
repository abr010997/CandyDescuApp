
    <center>
      <h2>Editar puesto: <?php echo $this->classpuestos->getAtributo('CDPUESTO');?> </h2>
    </center>
   
        <form action="?c=classpuestos&m=editar" method="post">
      <div class="form-group">
        <label for="CDIDPUES">Código del Puesto:</label>
        <input type="text" class="form-control" id="CDIDPUES" name="CDIDPUES" value="<?php echo $this->classpuestos->getAtributo('CDIDPUES');?>" readonly>
      </div>
      <div class="form-group">
        <label for="CDPUESTO">Nombre del puesto</label>
        <input type="text" class="form-control" id="CDPUESTO" name="CDPUESTO" value="<?php echo $this->classpuestos->getAtributo('CDPUESTO');?> " >
      </div>
      
      <button type="submit" class="btn btn-success">Editar puesto</button> 
      <a href="?c=classpuestos&m=index" class="btn btn-danger" role="button">Regresar</a>    
    </form>
  
