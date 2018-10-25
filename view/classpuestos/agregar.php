   
    <center><h2>Agregar nuevo puesto.</h2></center>
    <form action="?c=classpuestos&m=agregar" method="post" >
    <div class="col-sm-offset-4 col-sm-4">
      <div class="form-group">
        <label for="cd_usu_idpuesto">Código del puesto:</label>
        <input type="text" class="form-control" id="cd_usu_idpuesto" name="cd_usu_idpuesto">
      </div>
      <div class="form-group">
        <label for="cd_descripcion_pues">Nombre del puesto:</label>
        <input type="text" class="form-control" id="cd_descripcion_pues" name="cd_descripcion_pues">
      </div>

      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar Puesto</button> 
      <a id="regresar" class="btn btn-danger" role="button" href="?c=classpuestos&m=index"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>  
      </div>
     </form>
