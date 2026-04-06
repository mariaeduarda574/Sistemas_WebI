//1- Par ou Ímpar
function verificarParOuImpar() {
    alert("Descubra se o número é Par ou ímpar! ");
    
    let num = Number(prompt("Digite um número: "));

    if (num % 2 === 0) {
        alert("Este número é par");
    } else {
        alert("Este número é ímpar");
    }
}

//2- Verificação de Maioridade
function verificarMaioridade() {
    alert("Aqui você descobrirá se é maior de idade!!");
    
    let idade = Number(prompt("Digite sua idade: "));

    if (idade >= 18) {
       alert("Você é maior de idade!!");
    } else {
        alert("Você é menor de idade!!");
    }
}

//3- Contagem de 1 a 10
function contarAteDez() {
    alert("Contagem de 1 a 10");
    
    for (let i = 1; i <= 10; i++) {
       console.log(i);
    }
}

//4- Contagem Regressiva
function contagemRegressiva() {
    alert("Contagem regressiva do número digitado: ");
    
    let num1 = Number(prompt("Digite um número: "));
    

    while (num1 >= 0) {
        alert(num1);
        num1--;
    }
    
    alert("Fim da contagem!");
}

//5- Tabuada
function gerarTabuada() {
    alert('Tabuada do número digitado');
    
    let numero = prompt("Digite um número:");

    for (let i = 1; i <= 10; i++) {
        alert(`${numero} x ${i} = ${numero * i}`);
    }
}

//6- Somatório
function calcularSomatorio() {
    alert("Aqui será somado de 1 até o número digitado");
    
    let somat = Number(prompt("Digite o número"));
    let soma = 0;

    for (let i = 1; i <= somat; i++) {
        soma = soma + i; 
    }

    alert("A soma é: " + soma);
}

//7- Número Primo
function verificarPrimo() {
    alert("Número Primo ou não?");
    
    let numerop = Number(prompt("Digite um número:"));
    let primo = true;

    if (numerop < 2) {
        primo = false;
    } else {
        for (let i = 2; i < numerop; i++) {
            if (numerop % i === 0) {
                primo = false;
                break;
            }
        }
    }

    if (primo) {
       alert(`O número ${numerop}  é primo!`);
    } else {
        alert(`O número ${numerop}  não é primo.`);
    }
}

//8- Login Simples
function realizarLogin() {
    alert("Login Simples");

    let usuario = prompt("Digite o nome do usuário: ");
    let senha = prompt("Digite a senha: ");

    while (usuario !== "duda" || senha !== "0702") {
        
        if (usuario !== "duda") {
            alert("Usuário errado!");
        }

        if (senha !== "0702") {
            alert("Senha errada!");
        }

        usuario = prompt("Digite o nome do usuário novamente: ");
        senha = prompt("Digite a senha novamente: ");
    }

    alert("Login realizado com sucesso!");
}

//9. Soma de Números Positivos
function somarPositivos() {
    alert("Soma de números positivos");
    let somap = 0;

    while (true) {
        let nump = Number(prompt("Digite um número (ou um negativo para parar): "));

        if (nump < 0) {
            break; 
        }else
            somap += nump; 
    }

    alert("A soma dos números positivos é: " + somap);
}

//10. Adivinhação
function jogarAdivinhacao() {
    let numeroa = Math.floor(Math.random() * 10) + 1;
    
    let palpite = prompt("Adivinhe o número de 1 a 10");

    while (palpite != numeroa) {
        let palpiteNum = Number(palpite);

        if (palpiteNum > numeroa) {
            alert("O número secreto é menor");
        } else if (palpiteNum < numeroa) {
            alert("O número secreto é maior");
        }

        palpite = prompt("Tente novamente: ");
    }

    alert("Parabéns! Você acertou!!");
}

//11-Cálculo de Fatorial
function calcularFatorial() {
    alert("Digite um número e verá o seu fatorial!!");
    let numfa = Number(prompt("Digite um número:"));
    let fatorial = 1;

    for (let i = 1; i <= numfa; i++) {
        fatorial *= i;
    }

    alert("O valor fatorial de " + numfa + " é: " + fatorial);
}

//12- Validação de nota
function validarNota() {
    alert("Validação de nota!!");
    let notav;

    while (true) {
        notav = Number(prompt("Digite uma nota e verá se é valida ou não:"));

        if (notav >= 0 && notav <= 10) {
            alert("Nota válida: " + notav);
            break;
        } else {
            alert("Nota inválida! Tente novamente.");
           alert("Tentativa inválida: " + notav);
        }
    }
}


// 13 - Média de Notas
function verificarAprovacao() {
    alert("Digite suas notas e descobrirá se foi aprovado ou não!!");

    let nota1 = Number(prompt("Digite a primeira nota:"));
    let nota2 = Number(prompt("Digite a segunda nota:"));
    let nota3 = Number(prompt("Digite a terceira nota:"));

    let somam = (nota1 + nota2 + nota3);
    let media1 = somam / 3;

    alert("A sua média é: " + media1.toFixed(2));

    if (media1 >= 7) {
        alert("Parabéns, você foi aprovado!!");
    } else {
        alert("Desculpe, mas você foi reprovado");
    }

    return media1;
}



// 14 - Caixa eletrônico
function caixaEletronico() {
    alert("Caixa eletrônico");

    let valor = Number(prompt("Digite o valor:"));

    let n100 = Math.floor(valor / 100);
    valor = valor % 100;

    let n50 = Math.floor(valor / 50);
    valor = valor % 50;

    let n20 = Math.floor(valor / 20);
    valor = valor % 20;

    let n10 = Math.floor(valor / 10);
    valor = valor % 10;

    let n5 = Math.floor(valor / 5);
    valor = valor % 5;

    let n2 = Math.floor(valor / 2);
    valor = valor % 2;

    let n1 = valor;

    alert(n100 + " nota(s) de 100");
    alert(n50 + " nota(s) de 50");
    alert(n20 + " nota(s) de 20");
    alert(n10 + " nota(s) de 10");
    alert(n5 + " nota(s) de 5");
    alert(n2 + " nota(s) de 2");
    alert(n1 + " moeda(s) de 1");

    return;
}



// 15 - Números Ímpares
function listarImpares() {
    alert("Números ímpares:");

    let numeroim = Number(prompt("Digite um número:"));

    for (let i = 1; i <= numeroim; i++) {
        if (i % 2 != 0) {
           alert(i);
        }
    }
}

