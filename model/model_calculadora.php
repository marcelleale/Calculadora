<?php

include "../Calculadora.php";

$operando1 = $_POST["operando1"];
$operando2 = $_POST["operando2"];
$operador = $_POST["operador"];

$calculadora = new Calculadora();

$resultado = $calculadora->efetuarCalculos($operando1, $operando2, $operador);


echo $resultado;

?>