   
    <center><h2>Agregar nuevo puesto</h2></center>
    <form action="?c=classpuestos&m=agregar" method="post" >
      <div class="form-group">
        <label for="CDIDPUES">Código del Puesto:</label>
        <input type="text" class="form-control" id="CDIDPUES" name="CDIDPUES">
      </div>
      <div class="form-group">
        <label for="CDPUESTO">Nombre del puesto:</label>
        <input type="text" class="form-control" id="CDPUESTO" name="CDPUESTO">
      </div>

      <button type="submit" class="btn btn-success">Guardar puesto</button> 
      <a id="regresar" class="btn btn-danger" role="button" href="?c=classpuestos&m=index">Regresar</a>  

     </form>
