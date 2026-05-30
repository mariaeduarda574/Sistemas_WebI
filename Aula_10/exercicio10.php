<?php
    $notas = [5,8,9,7];
    $qtde = count($notas);
    $total = 0;
    for ($i=0; $i <=$qtde -1 ; $i++) { 
        $total = $total + $notas[$i];
    }
    $media = $total/$qtde;
    echo "A sua média é: $media <br>";
?>