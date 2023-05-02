<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start ();

if (isset ($_SESSION ["listadoClientes"]) > 0 ) {
    $aClientes = $_SESSION ["listadoClientes"];
} else {
    $aClientes = array ();
}
if ($_POST) {
    $nombre = $_POST ["txtNombre"];
    $dni = $_POST ["txtDni"];
    $telefono = $_POST ["txtTelefono"];
    $edad = $_POST ["txtEdad"];

    $aClientes [] = array ( 
        "nombre" => $nombre,
        "dni" => $dni,
        "telefono" => $telefono,
        "edad" => $edad,);

        $_SESSION ["listadoClientes"] = $aClientes;
    }
    if(isset($_GET["pos"])){
        $pos = $_GET["pos"];
        unset($aClientes[$pos]);
        $_SESSION["listadoClientes"] = $aClientes;
        header("Location: clientes_session.php");
    }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Tabla de clientes</h1>
            </div>
        </div>
        <div class="row">
                <div class="col-3 offse-1 me-5">            
                    <form method="POST" action="">
                    <label for="">Nombre</label>
                    <input type="text" id="txtNombre" name="txtNombre" class="form-control">

                    <label for="">DNI</label>
                    <input type="text" id="txtDni" name="txtDni" class="form-control">

                    <label for="">Telefono</label>
                    <input type="tel" id="txtTelefono" name="txtTelefono" class="form-control">
    
                    <label for="">Edad</label>
                    <input type="number" id="txtEdad" name="txtEdad" class="form-control">

                    <button type="submit" name="btnEnviar" class="btn bg-primary text-white">Enviar</button>
                </div>
            </form>
            <div class="col-6 ms-5">
        <table class="table table-hover shadow boder">
            <thead>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Telefono</th>
                <th>Edad</th>
            
            </thead>
            <tbody>
            <?php foreach($aClientes as $pos => $cliente): ?>
                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["edad"]; ?></td>
                                <td><a href="clientes_session.php?pos=<?php echo $pos; ?>">Eliminar</a></td>
                            </tr>
                        <?php endforeach; ?>
            </tbody>
        </table>
       </div> 
       </div>
       </div>
            </div>
    </main>
</body>
</html>