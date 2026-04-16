<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02 - Tabela</title>
    <style>
        table,tr,td,th{
            border: 2px solid blue;
        }
    </style>
</head>
<body>
    <h1>Tabela de Alunos</h1>
    
  <table>
    <tr>
        <th>RM</th>
        <th>NOME</th>
        <th>EMAIL</th>
    </tr>

    <?php
        for ($i=1; $i <= 2 ; $i++) { 
           echo "<tr>";
           for ($c=1; $c <=3; $c++) { 
                echo "<td>Linha $i Coluna $c</td>";
           }
           
           
           echo "<tr>";
        }
    ?>
  </table>
</body>
</html>
