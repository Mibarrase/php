<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 


if($_POST) {
    $nombre = $_POST ["txtUsuario"];
    $dni = $_POST["txtNumero"];
    $telefono = $_POST ["txtTel"];
    $edad = $_POST ["txtEdad"];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <h1 class="text-center">Resultado de formulario</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover boder">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Telefono</th>
                        <th>Edad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <?php echo $nombre; ?></td>
                        <td> <?php echo $dni; ?></td>
                        <td> <?php echo $telefono; ?></td>
                        <td> <?php echo $edad; ?></td>
                </tr>
                </tbody>
            </table>
                <div>
                        <a href="index.php" class="btn btn-primary float-end ">Regresar</a>
                    </div>
        </div>
    </div>
    </div>
    
</body>
</html>