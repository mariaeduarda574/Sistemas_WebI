<?php
    // Conversões Explicitas

    $x = 3.5;
    $y = 4.3;
    $z = "9.9";

    $n1 = (int) $x + $y;
    $n2 = (int) ($x + $y);
    $n3 = (float) ($y + $z);

    echo "Resultados: $n1, $n2, $n3";
    echo "<hr>"

    // teste 07 Erro

    /*$a = "Casal 20";
    $b = 10;
    $c = $a + $b;

    echo $c;*/

    //8) Com a atribuição $pre = “hiper”; Qual das linhas abaixo mostrará a mensagem “hipertexto”?


    $pre = "Hiper";

    //echo "$pre.texto"; ERRO
    //echo $pre”texto”; ERRO
    //echo “$pretexto”; ERRO
    echo "${pre}texto";
    echo "<hr>";
    

    //9) Considerando as instruções abaixo:

    $x = "P";
    $y = "H";
    $z = "$x$y$x";
    echo $z;
    echo "<hr>"

?> 
