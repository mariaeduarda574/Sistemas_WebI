<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>

    <style>

        table{
            border-collapse: collapse;
            width: 500px;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: purple;
            color: white;
        }

        .eletronico{
            background-color: violet;
        }

        .roupa{
            background-color: pink;
        }

        .alimento{
            background-color: plum;
        }

    </style>
</head>
<body>

    <?php

        $produtos = [

            [
                "nome" => "Notebook",
                "preco" => "3500",
                "categoria" => "eletronico"
            ],

            [
                "nome" => "Camiseta",
                "preco" => "80",
                "categoria" => "roupa"
            ],

            [
                "nome" => "Chocolate",
                "preco" => "10",
                "categoria" => "alimento"
            ]

        ];

    ?>

    <table>

        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>

        <?php

            foreach($produtos as $produto){

                echo "<tr class='".$produto['categoria']."'>";

                echo "<td>".$produto['nome']."</td>";
                echo "<td>R$ ".$produto['preco']."</td>";
                echo "<td>".$produto['categoria']."</td>";

                echo "</tr>";
            }

        ?>

    </table>

</body>
</html>