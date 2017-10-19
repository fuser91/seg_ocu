<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>Seguridad Ocupacional</title>
    <link type='image/png' rel='shortcut icon' href='img/myfavicon.ico'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='css/fondos.css' rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
    </script>

    <style type="text/css">
        
        body { 
          background: url(img/fondo.jpg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }

    </style>

</head>
<body>
    <div class="error">
        <span> Datos Ingresados no válidos, intentelo de nuevo por favor </span>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center> <img src="img/logo_portada.png" width='70%' height='70%' > </center>
                    <span class="glyphicon"></span> <b> Bienvenido a la Jefatura Seguridad Ocupacional </div>
                <div class="panel-body">
                    
                    <form class="form-horizontal" role="form" action="" id="formlg">
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            usuario </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="usuario" 
                            name='usuariolg' 
                            required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Clave</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña" 
                            name='passlg' required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Recordarme
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Ingresar</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Resetear</button>
                        </div>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    jQuery(document).on('submit','#formlg', function(event) {
    event.preventDefault();

    jQuery.ajax({
    url:'/main_app/login.php';
    type: 'POST'
    dataType: 'json',
    data: $(this).serialLize(),
    beforeSend: function(){

    }
})

.done(function(respuesta) {
    console.log(respuesta);
})
.fail(function(resp){
    console.log(resp.responseText);
})
.allways(function(){
    console.log("complete";)
});
});

</script>

</body>
</html>
