function cerrarSesion(){
    alertify.confirm( 
        'Confirm Title', 
        'Confirm Message', 
        function(){ 
            window.location = "?c=classlogin&m=index"
            alertify.success('Ok') }, 
        function(){ 
            alertify.error('Cancel')
        }
    );
}