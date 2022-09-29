<?php
    include_once 'calcularMassa.php';
    $totalConsulta;
    $resultado = calcularMassaCorporal(95,1.89);
    echo 'IMC do Resultado + 10: ',$resultado+10,'<br>';
    echo 'IMC  igual: ',calcularMassaCorporal(90,1.80),'<br>';
    echo 'IMC  igual: ',calcularMassaCorporal(70,1.80),'<br>';
    echo 'IMC  igual: ',calcularMassaCorporal(80,1.80),'<br>';
    echo '<br>Total de pessoas que consultaram o IMC:', $totalConsulta;

?> 
