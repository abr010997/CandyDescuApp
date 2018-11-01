function cerrarSesion(){
    alertify.confirm( 
        'Cerrar Sesión', 
        '¿Desea salir?', 
        function(){ 
            window.location = "?c=classinicio&m=index" 
            alertify.success('Ok') },
        function(){ 
            alertify.error('Cancelar')
        }
    );
}