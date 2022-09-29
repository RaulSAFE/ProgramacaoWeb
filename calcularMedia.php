<?php
    function calcularMediaAritmetica($valores){
        $soma = 0;
        for($i=0; $i<=3;$i++){
            $soma = $soma+$valores[$i];
            
        }
        return $soma/4;
    }
?>