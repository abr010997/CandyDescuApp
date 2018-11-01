<center><h2>Verificar nuevo cliente</h2></center>
    <form action="?c=classCliente&m=agregar" method="post">
    <div class="col-sm-offset-4 col-sm-4">
      <div class="form-group">
        <label for="cd_cli_cedula">Cédula:</label>
        <input type="text" class="form-control" id="cd_cli_cedula" name="cd_cli_cedula">
      </div>
      <div class="form-group">
        <label for="cd_cli_nombre">Factura :</label>
        <input type="text" class="form-control" id="cd_cli_nombre" name="cd_cli_nombre">
      </div>
  
      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span> Verificar </button> 
      <a id="regresar" class="btn btn-danger" role="button" href="?c=classCliente&m=index"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>  
      </div>
     </form>