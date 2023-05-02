<?php
date_default_timezone_set("America/Bogota");
$nombre = "Mateo Ibarra";
$edad = 28;

//$aPeliculas = array("Volver al futuro", "Titanic", "El día después de mañana");
$aPeliculas = ["Iron Man", "Capitan America", "Los vengadores"]; //Otra forma

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
    <header class="container">
        <div class="row" >
            <div class="col-12 mb-6">
        <h1 class="text-center">Ficha Personal </h1>
        </div>
        </div>
</header>
<body class=container>
    <div class="row">
        <div class="col-12">
    <table class="table table-hover border">
        <tr>
            <td>Fecha</td>
            <td> <?php echo date ("d/m/Y"); ?> </td>
        </tr>
        <tr>
                <td>Nombre y apellido</td>
                <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
                <td>Edad</td>
                <td><?php echo $edad; ?></td>
        </tr>
                <td>Peliculas Favoritas</td>
                <td><?php echo $aPeliculas[0]; ?><br>
                    <?php echo $aPeliculas[1]; ?> <br> 
                    <?php  echo $aPeliculas[2]; ?>
                </td>

    </table>
    </div>
    </div>
</body>
    
</body>
</html>