<?php
    $nomes = ["Maria","Robson","Yasmin","Matheus","Torres"];

    foreach ($nomes as $valor) {
        echo "$valor <br>";
    }

    echo" <hr>";

    $nomes[] = "Franco";

    foreach ($nomes as $valor) {
        echo "$valor <br>";
    }


    echo" <hr>";

    $nomes[1] = "João";

    foreach ($nomes as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>"

    

?>