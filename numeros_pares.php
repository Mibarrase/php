<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Contador 1 a 100
//for ($contador =0; $contador <=100; $contador++) {
//    echo "<br>" . $contador;
//}
//echo "<br>" . "Fin Del programa"
// -- Contador de pares
//for ($contador =0; $contador <=100; $contador+=2) {
//    echo "<br>" . $contador;
//}
//echo "<br>" . "Fin Del programa"
//--Numero 60
//for ($i =2; $i <=100; $i+=2) {
//    echo "<br>" . $i;
//    if ($i == 60);
//    break;
//}
//echo "<br>" . "Fin Del programa"
$aClientes = array(
    array("dni" => "33300012", "nombre" => "Ana Valle"), //Posición 0
    array("dni" => "33300013", "nombre" => "Bernabe"), //Posición 1
);


foreach ($aClientes as $pos => $cliente) {
    echo "<br>" . $cliente["nombre"];
}
?>