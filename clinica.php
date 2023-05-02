<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$aPacientes = array ();
$aPacientes [] = array (
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50
);
$aPacientes [] = array (
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 76
);
$aPacientes [] = array (
    "dni" => "23.684.385",
    "nombre" => "Juan Irraola",
    "edad" => 28,
    "peso" => 76
);
$aPacientes [] = array (
    "dni" => "23.684.385",
    "nombre" => "Beatriz Ocampo",
    "edad" => 50,
    "peso" => 76
);
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
        <h1 class="text-center">Listado de pacientes </h1>
        </div>
        </div>
</header>

<body class= container>
        <div class="row">
            <table class="table table-hover border">
                <thead>
                <th>DNI</th>
                <th>Nombre y apellido</th>
                <th>Edad</th>
                <th>Peso</th>
                </thead>
                <?php 
                    foreach($aPacientes as $paciente){ 
                    ?>
                    <tr>
                        <td><?php echo $paciente["dni"]; ?></td>
                        <td><?php echo $paciente["nombre"]; ?></td>
                        <td><?php echo $paciente["edad"]; ?></td>
                        <td><?php echo $paciente["peso"];  ?></td>
                    </tr>
                    <?php
                        } 
                    ?>
                </table>
            </div>
            </table>
        </div>
  
</body>
<footer>

</footer>
</html>