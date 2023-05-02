<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
        <h1 class="text-center">Formulario de datos personales</h1>
            </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="resultado.php">
                    <div class="pb-3">
                <laber for="">Nombre: * </laber>
                <input type="text" id="txtUsuario" name="txtUsuario" class="form-control" requerid>
                    </div>
                <div class="pb-3">
                <laber for="">DNI: * </laber>
                <input type="text" id="txtNumero" name="txtNumero" class="form-control" requerid>
                        </div>
                <div class="pb-3">
                <laber for="">Telefono: * </laber>
                <input type="tel" id="txtTel" name="txtTel" class="form-control" requerid>
                </div>
                <div class="pb-3">
                <laber for="">Edad: * </laber>
                <input type="number" id="txtEdad" name="txtEdad" class="form-control" requerid>
                </div>
                <button class="btn btn-primary flaot-end" type="submit">ENVIAR</button>
                    </form>
                    
        </div>
    </div>
</body>

</html>