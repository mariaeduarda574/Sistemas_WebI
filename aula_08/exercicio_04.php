<?php
    $numeros = [1,2,3,4,5,6,7,8,9,10];


    if (count($numeros) > 0) {
        $media = array_sum($numeros) / count($numeros);
        echo "A média é: " . $media; //
    } else {
        echo "A array está vazia.";
    }

?>