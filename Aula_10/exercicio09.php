<?php
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    echo"Números Gerais: ";
     foreach ($numeros as $key) {
        echo"$key";
    }

    echo"<hr>";
    echo"Números Pares: ";
    $numerospare = [];
    foreach ($numeros as $key) {
        if ($key%2==0) {
            $numerospare[] = "$key";
        }
    }
    foreach ($numerospare as $key) {
        echo"$key";
    }


?>