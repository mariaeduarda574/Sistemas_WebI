<?php 
    function verificarAcesso($senhaDigitada){
        switch ($senhaDigitada) {
            case '123456':
                echo "Acesso Liberado";
                break;
            default:
                echo "Acesso Negado";
                break;
        }
    }
    verificarAcesso("123456");


?>