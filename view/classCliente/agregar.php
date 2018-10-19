   
    <center><h2>Agregar nuevo cliente</h2></center>
    <form action="?c=classCliente&m=agregar" method="post" >
      <div class="form-group">
        <label for="cd_cli_cedula">Cedula:</label>
        <input type="text" class="form-control" id="cd_cli_cedula" name="cd_cli_cedula">
      </div>
      <div class="form-group">
        <label for="cd_cli_nombre">Nombre :</label>
        <input type="text" class="form-control" id="cd_cli_nombre" name="cd_cli_nombre">
      </div>
       <div class="form-group">
        <label for="cd_cli_ape1">Apellido 1:</label>
        <input type="text" class="form-control" id="cd_cli_ape1" name="cd_cli_ape1">
      </div>
       <div class="form-group">
        <label for="cd_cli_ape2"> Apellido 2:</label>
        <input type="text" class="form-control" id="cd_cli_ape2" name="cd_cli_ape2">
      </div>

      <button type="submit" class="btn btn-success">Guardar </button> 
      <a id="regresar" class="btn btn-danger" role="button" href="?c=classCliente&m=index">Regresar</a>  

      <!--<script type="text/javascript">

        $("#regresar").click(function(){
        var bool=confirm("XXXXX----DESEA REGRESAR----XXXXX?");
        if(bool){
        $("#contenido").load("?c=classCliente&m=index");
        }else{
        $.alert("CANCELADO");
        }
      });
      </script>-->
     </form>
