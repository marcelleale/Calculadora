$(function(){
    
   $("input[name='operador']").click(function(){
  
    var operando1 = $("#operando1").val();
    var operando2 = $("#operando2").val();
    var operador = $('input[name="operador"]:checked').val();

    if(operando1 == ""){
        alert("Digite o primeiro valor");
        return false;
    }

    if(operando2 == ""){
        alert("Digite o segundo valor");
        return false;
    }

    if(operador == 'divisao' || operando2 == 0){
        alert("Não é possível realizar divisão por zero.");
        return false;
    }

    $.ajax({
        type: "POST",
        url:"../model/model_calculadora.php",
        data: "operando1=" + operando1 +
            "&operando2=" + operando2 +
            "&operador=" + operador,

        success: function(msg){
            $("#result").val(msg);
        },
    });

   });

});