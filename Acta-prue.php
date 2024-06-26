<?php 

ini_set('display_errors' , 1);
ini_set('display_startup_errors' , 1);
error_reporting(E_ALL);

session_start ();

function promediar ($aNotas) {
    $suma = 0;
    foreach ($aNotas as $nota){
        $suma += $nota;
    }
    return $suma/count($aNotas);
}
if (isset($_SESSION["listadoAlumnos"]) && count($_SESSION["listadoAlumnos"]) > 0 ){
    $aAlumnos = $_SESSION["listadoAlumnos"];
}   else{
    $aAlumnos= array();
}

if ($_POST) {
        if (isset($_POST["btnEnviar"])) {
            $nombre = $_POST ["txtNombre"];
            $nota1 = $_POST ["txtNota1"];
            $nota2 = $_POST ["txtNota2"];
            $aAlumnos [] = ["nombre" => $nombre, "aNotas" => [$nota1,$nota2]];
            $_SESSION["listadoAlumnos"] = $aAlumnos;
        }
            if (isset ($_POST ["btnEliminar"])){
                session_destroy ();
                $aAlumnos = array ();
        }
    }
if (isset ($_GET ["pos"]) && $_GET ["pos"] >= 0 ) {
    $pos = $_GET ["pos"];
    unset ($aAlumnos [$pos]);
    $_SESSION ["listadoAlumnos"] = $aAlumnos;
    header ("Location: Acta-prue.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acta Prueb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class= container>
    <header>
        <div class="row">
        <h1 class="text-center">Acta Numero 2</h1>
        </div>
    </header>
    <main>
        <div class="row">
                <table class="table table-hover shadow">
                    <tr>
                        <th>Cedula</th>
                        <th>Alumno</th>
                        <th>Nota 1 </th>
                        <th>Nota 2</th>
                        <th>Promedio</th>
                        <th>Acciones</th>
                    </tr>
                    <?php
                    $sumPromedios = 0;
                    foreach ($aAlumnos as $pos => $alumno){
                        $promedio = promediar ($alumno ["aNotas"]);
                        ?>
                        <tr>
                            <td> <?php echo $pos +1; ?>    </td>
                            <td> <?php echo $alumno ["nombre"]; ?>   </td>
                            <td> <?php echo $alumno ["aNotas"] [0]; ?>    </td>
                            <td> <?php echo $alumno ["aNotas"] [1]; ?>    </td>
                            <td> <?php echo number_format ($promedio, 2, "," , "." ); ?>   </td>
                            <td><a href="Acta-prue.php?pos=<?php echo $pos; ?> "> Eliminar </a> </td>
                        </tr>
                    <?php $sumPromedios += $promedio;} ?>
                </table>
                <div class="row">
                    <div class="col-12 offset-1 me-4">
                    <form method="POST" action="">
                            <div class="form-group">
                                <div class="d-inline-block">
                                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre y Apellido"> 
                                </div>
                                <div class="d-inline-block">
                                <input type="text" id="txtNota1" name="txtNota1" class="form-control mt-3" placeholder="Ingresar Nota uno">
                                </div>
                                <div class="d-inline-block">
                                <input type="text" id="txtNota2" name="txtNota2" class="form-control mt-3" placeholder="Ingresar Nota dos">
                                </div>
                                <div class="d-inline-block">
                                <button class="btn btn-primary" type="submit" name="btnEnviar">+</button>
                                </div>
                            </div>
                            </form>
                    </div>
                </div>
                <div class="row">
                <div class="col-12 my-3">
    <div class="d-flex justify-content-between">
        <h5>Promedio de la cursada: <?php echo count($aAlumnos) > 0? number_format($sumPromedios/count($aAlumnos) +1,2,".",","): 0; ?> </h5>
        <form method="POST">
            <button name="btnEliminar" type="submit" class="btn btn-danger" >Limpiar Acta </button>
        </form>
    </div>
</div>
</div>
    </main>
    
    
</body>
</html>