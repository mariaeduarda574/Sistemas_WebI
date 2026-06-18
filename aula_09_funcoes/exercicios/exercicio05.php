<?php
    $temperaturas = [22.5, 24.0, 25.5, 23.0];
    function calcularMediaTemperatura($listaDeTemperaturas){
        $soma = array_sum($listaDeTemperaturas);
        $n = count($listaDeTemperaturas);   
        $media = $soma / $n;
        return $media;
    }
    $resultado = calcularMediaTemperatura($temperaturas);
    echo "A média da temperaturas registradas no Arduino é de: $resultado";
?>