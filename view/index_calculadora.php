<DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script type="text/javascript" src="../controller/jquery-3.6.3.min.js"> </script>
        <script type="text/javascript" language = "javascript" src="../controller/controler_calculadora.js"></script>
        <link rel="stylesheet" href="./bootstrap5.2.min.css">
    </head>
    <body>

    <br>
    <h1>Calculadora</h1>
    
    <br>
    <br>

    
    <input type="number" id="operando1"  placeholder="Digite um número">
    <input type="number" id="operando2"  placeholder="Digite um número">

    <!-- <button type="button" id="btn-calc" class="btn btn-primary"> = </button> -->

    <input type="text" id="result"  placeholder="Resultado">

    <br><br>

    <h5>Escolha uma das operações:</h5>
    <label for="adicao">
    <input type="radio" id="adicao" class="form-check-input" class="operador" name="operador" value="adicao">
    +</label>

    <label for="subtracao">
    <input type="radio" id="subtracao" class="form-check-input" class="operador" name="operador" value="subtracao">
    -</label>

    <label for="multiplicacao">
    <input type="radio" id="multiplicacao" class="form-check-input" class="operador" name="operador" value="multiplicacao">
    x</label>

    <label for="divisao">
    <input type="radio" id="divisao" class="operador" name="operador" value="divisao">
    /</label>



    </body>
</html>