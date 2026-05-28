<?php
     $cores = ["azul","amarelo", "verde"];

     array_push($cores ,"rosa");

     array_shift($cores);
     
      foreach ($cores as $valor) {
       echo "$valor <br>";
    }

     
?>