<?php
   function msg($periodo){
    //  if ($periodo == "manhã") {
    //     echo "Bom dia!";
    //  } else {
    //     if ($periodo == "tarde") {
    //         echo "Boa tarde!";
    //     } else {
    //         if ($periodo == "noite") {
    //             echo "Boa noite!";
    //         } else {
    //             echo "Valor inválido";
    //         }
    //     }
        
    //  }

    switch ($periodo) {
        case 'manhã' || 'Manhã' :
            echo "Bom dia!";
            break;
        case 'tarde' || 'Tarde':
            echo "Boa tarde!";
            break;
        case 'noite'|| 'Noite':
            echo "Boa noite!";
            break;
        
        default:
           echo "Valor inválido";
            break;
    }
    }

    echo msg("MANHÃ"); 


?>