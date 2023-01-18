<?php 

class Calculadora {

    function efetuarCalculos($num1, $num2, $operador){

        $resultado = "";

        if ($operador == 'adicao'){
            $resultado = $num1 + $num2;
        }

        if ($operador == 'subtracao'){
            $resultado = $num1 - $num2;
        }

        if ($operador == 'multiplicacao'){
            $resultado = $num1 * $num2;
        }

        if ($operador == 'divisao'){
            $resultado = $num1 / $num2;
        }

        return $resultado;
    }
    
}
?>