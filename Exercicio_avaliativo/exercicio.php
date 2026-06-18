<!-- 1. Tenha uma função chamada classificarAluno($nota).
2. A função deve retornar:
o "Aprovado" se a nota for maior ou igual a 7.
o "Recuperação" se a nota for maior ou igual a 5 e menor que 7.
o "Reprovado" se a nota for menor que 5.
3. Armazene as notas de 10 alunos em um array.
4. Utilize um laço de repetição para percorrer todas as notas.
5. Para cada aluno:
o Exiba a nota.
o Exiba a situação retornada pela função.
6. Ao final, mostre:
o Quantos alunos foram aprovados.
o Quantos ficaram em recuperação.
o Quantos foram reprovados.
o A média da turma.

Exemplo de entrada
$notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];

Exemplo de saída
Aluno 1: Nota = 8.5 -> Aprovado
Aluno 2: Nota = 6.0 -> Recuperação
Aluno 3: Nota = 4.5 -> Reprovado
...

Resumo da turma:
Aprovados: 4
Recuperação: 3
Reprovados: 3
Média da turma: 6.62
Após calcular a média da turma:
 Se a média for maior ou igual a 7, exiba:
Turma com bom desempenho!
 Caso contrário:
Turma precisa melhorar. -->

<?php
    $nota = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];

    function classificarAluno($nota){
        if ($nota >= 7 ) {
            return "Aprovado";
        } else {
            if ($nota >= 5 && $nota< 7) {
                return "Recuperão";
            } else {
               return "Reprovado";
            } 
        }  
    }

    
?>