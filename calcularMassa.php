<?php
    $totalConsulta = 0;
    function calcularMassaCorporal($peso, $altura){
        global $totalConsulta; // Primeiro declarar como variavel global
        // se declarar na mesma liha da atribuição dá ruim
        $totalConsulta+=1;
        return number_format($peso/($altura*$altura),2); //number_format(operação, numero de casas decimais) 
        //restringe o numero de casas depois da virgula
    }
?>