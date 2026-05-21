<?php
    $frutas = ["Maçã", "Banana", "Laranja"];
    //echo $frutas[0];

    // foreach ($frutas as $indice => $valor) {
    //     echo "Indice: $indice ==> $valor <br>";
    // }


    // foreach ($frutas as $indice => $valor) {
    //     echo "Fruta: $valor <br>";
    // }


    // $qtde = count($frutas);

    // for ($i=0; $i <= $qtde-1 ; $i++) { 
    //     // echo "$i <br>";
    //     echo "$frutas[$i] <br>";
    // }

    $animais = ["gato","cachorro"];

    $animais[] = "passarinho";

    foreach ($animais as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    $animais[1] = "tartaruga";

    foreach ($animais as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    array_push( $animais , "peixe");

    foreach ($animais as $chave => $valor) {
        echo "$chave ==> $valor <br>";
    }

    echo "<hr>";

    array_unshift($animais , "cachorro");

    foreach ($animais as $chave => $valor) {
        echo "$chave ==> $valor <br>";
    }

    echo "<hr>";
?>