<?php
    function calcularDesconto($ValordaCompra){
        // Claculamos o desconto (10% do valor)
        $desconto = $ValordaCompra * 0.10;

        // Subtraímos o desconto do valor original
        $valorFinal = $valorDaCompra - $desconto;

        // Devolvemos o valor final pronto!
        return $valorFinal;
    }

    // Usando a função na prática:
    $totalCarrinho = 250.00;
    
    
?>

