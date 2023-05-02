<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

$aEmpleados = array();
$aEmpleados [] = array("dni" => 33300123,"nombre" => "David García","bruto" => 85000.30);
$aEmpleados [] = array("dni" => 40874456,"nombre" => "Ana Del Valle", "bruto" => 90000);
$aEmpleados [] = array("dni" => 67567565,"nombre" => "Andrés perez", "bruto" => 1000000);
$aEmpleados [] = array("dni" => 75744545,"nombre" => "Victoria Luz","bruto" => 70000);

function calcularNeto($bruto)
{
    return $bruto - $bruto * 0.17;
}
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
        <h1 class="text-center">Listado de empleados </h1>
        </div>
        </div>
</header>

<body class= container>
        <div class="row">
            <table class="table table-hover border">
                <thead>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Sueldo</th>
                </thead>
                <?php 
                    foreach($aEmpleados as $empleado){ 
                    ?>
                    <tr>
                        <td><?php echo $empleado["dni"]; ?></td>
                         <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td>
                         <td><?php $importe = calcularNeto ($empleado["bruto"]);
                         echo number_format($importe, 2, "," , ".");?></td>
                    </td>
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