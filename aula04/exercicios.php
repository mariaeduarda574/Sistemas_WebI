<?php
    // 13) Considerando as instruções abaixo:

    $x = "100 vergonha";
    $y = 50;
    $z = 2 * $y;
    if ($x == $z){
        echo "São iguais";
    }else{
        echo "São diferentes";
    }
    echo "<hr>";
?>

<?php
    // 14) Considerando o trecho abaixo:

    $a = 4;
    $b = 8;
    $r = (($a==$b) || ($a+$b==12));

    if ($r) {
        echo("Resultado Logíco = VERDADEIRO");
    }else {
        echo ("Resultado Logíco = FALSO");
    }
    echo "<hr>";
?>

<?php
    // 15) Considerando o trecho abaixo:

    $a = 4;
    $b = 8;
    $r = (($a==$b) && ($a+$b==12));

    if ($r) {
        echo("Resultado Logíco = VERDADEIRO");
    }else {
        echo ("Resultado Logíco = FALSO");
    }
    echo "<hr>";
?>

<?php
    // 16) Considerando o trecho abaixo:
    $a = 5;
    $b = 10;
    $r = (($a<=$b) XOR (2*$a==$b));

    if ($r) {
        echo("Resultado Logíco = VERDADEIRO");
    }else {
        echo ("Resultado Logíco = FALSO");
    }
    echo "<hr>";
?>
