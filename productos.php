<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$aProductos = array();
$aProductos[] = array("nombre" => "Smart TV 55\" 4K UHD",
                   "marca" => "Hitachi",
                   "modelo" => "554KS20",
                   "stock" => 60,
                   "precio" => 58000
);
$aProductos[] = array("nombre" => "Samsung Galaxy A30 Blanco",
                   "marca" => "Samsung",
                   "modelo" => "Galaxy A30",
                   "stock" => 0,
                   "precio" => 22000
);
$aProductos[] = array("nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
                   "marca" => "Surrey",
                   "modelo" => "553AIQ1201E",
                   "stock" => 5,
                   "precio" => 45000
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
        <h1 class="text-center">Listado de productos </h1>
        </div>
        </div>
</header>

<body class= container>
        <div class="row">
            <table class="table table-hover border">
                <thead>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Accion</th>
                </thead>
                <tr>
                    <td> <?php echo $aProductos[0]["nombre"] ?></td>
                    <td> <?php echo $aProductos[0]["marca"] ?></td>
                    <td> <?php echo $aProductos[0]["modelo"] ?></td>
                    <td><?php echo $aProductos[0]["stock"]>10? "Hay stock" : ($aProductos[0]["stock"]> 0 && $aProductos[0]["stock"]<10? "Hay poco stock" : "No hay stock"); ?></td>
                    <td> $<?php echo $aProductos[0]["precio"] ?></td>
                    <td><button class="btn btn-primary btn-lg">Comprar</button></td>
                </tr>
                <tr>
                    <td> <?php echo $aProductos[1]["nombre"] ?></td>
                    <td> <?php echo $aProductos[1]["marca"] ?></td>
                    <td> <?php echo $aProductos[1]["modelo"] ?></td>
                    <td><?php echo $aProductos[1]["stock"]>10? "Hay stock" : ($aProductos[1]["stock"]> 0 && $aProductos[1]["stock"]<10? "Hay poco stock" : "No hay stock"); ?></td>
                    <td> $<?php echo $aProductos[1]["precio"] ?></td>
                    <td><button class="btn btn-primary btn-lg">Comprar</button></td>
                </tr>
                <tr>
                    <td> <?php echo $aProductos[2]["nombre"] ?></td>
                    <td> <?php echo $aProductos[2]["marca"] ?></td>
                    <td> <?php echo $aProductos[2]["modelo"] ?></td>
                    <td><?php echo $aProductos[2]["stock"]>10? "Hay stock" : ($aProductos[2]["stock"]> 0 && $aProductos[2]["stock"]<10? "Hay poco stock" : "No hay stock"); ?></td>
                    <td> $<?php echo $aProductos[2]["precio"] ?></td>
                    <td><button class="btn btn-primary btn-lg">Comprar</button></td>
                </tr>
            </table>
        </div>
  
</body>
<footer>

</footer>
</html>