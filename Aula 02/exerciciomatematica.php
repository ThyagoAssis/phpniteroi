<?php
    /*
     1 .Uma conta telefônica é composta dos seguintes custos:
     Assinatura: R$ 32,00
     Impulsos: R$ 0,09 por impulso que exceder a 90
     Chamadas p/ celular: R$0,35 por impulso 

    Escreva um programa que monte a fórmula para calcular o valor
    da conta para 254 impulsos e 23 chamadas para celular imprimindo 
    o resultado obtido.
    */
    echo "Exercicio 01 <br>";

    $assinatura = 32;
    $impulso = 0.09;
    $celular = 0.35;

    $impulsoExcedido = 254 - 90;
    $totalChamadaCelular = 23;

    $valorFatura = $assinatura + ($impulsoExcedido * $impulso) + ($totalChamadaCelular *  $celular);

    echo "O valor da fatura é: " . $valorFatura;

    echo "<br>--------------------------------------------------------<br>";

    /*
        2 -  Fazer um programa que imprima a média dos números 11, 19 e 7
    */
    echo "Exercicio 02 <br>";
    $valor1 = 11;
    $valor2 = 19;
    $valor3 = 7;

    $media = ($valor1 + $valor2 + $valor3)/3;

    echo "A média é: " . $media;

    echo "<br>--------------------------------------------------------<br>";

    /**
     * 3  - Um professor atribui pesos de 1 a 4 para as notas de quatro avaliações. 
     * A nota é calculada por meio da média ponderada (N1*1 + N2*2 + N3*3 + N4*4) / (1+2+3+4), 
     * onde N1 é a nota da primeira avaliação, N2 a da segunda, etc. 
     * Um aluno tirou as seguintes notas: 8, 7.5, 10, 9. 
     * Faça um programa que calcula e escreva a média deste aluno.     * 
     */
    echo "Exercicio 03 <br>";
     $n1 = 8;
     $n2 = 7.5;
     $n3 = 10;
     $n4 = 9;

     $mediaPonderada = ($n1*1 + $n2*2 + $n3*3 + $n4 * 4) / (1+2+3+4);

     echo "A média ponderada é: " . $mediaPonderada;
     echo "<br>--------------------------------------------------------<br>";

?>