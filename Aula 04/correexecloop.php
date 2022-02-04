<?php
    echo "<h1>Solução exercícios de repetição</h2>";


    /* 1 – Construa um algoritmo em PHP que leia 20 valores inteiros e calcule seu somatório. */

    echo "<h2>Exercício 01</h2>";
    
    $soma = 0;

    for($i = 0; $i < 20; $i++){
        $soma = $soma + $i;

        //Forma abreviada
        //$soma += $i;
    }

    echo "Total é: " . $soma;
    echo "<hr>";


    /* 2 – Construa um algoritmo que solicite ao usuário um valor entre 10 e 100, caso o usuário digite 
    um valor menor que 10 ou maior que 100, envie uma mensagem informando que os valores são inválidos 
    caso contrário conte de zero até o numero digitado pelo usuário. */

    echo "<h2>Exercício 02</h2>";
    $valor = 5;

    if ($valor <= 10 || $valor >= 100){
        echo "Os valor é invalido";
    }else{
        for($i = 0; $i <= $valor; $i++){
            echo $i . "<br>";
        }
    }

    echo "<hr>";


    /* 3 - Escreva um programa que calcule e mostre a tabuada de multiplicação (até 10x) de um número qualquer 
    informado através de uma variável. */

    echo "<h2>Exercício 03</h2>";
    $num = 5;

    for($cont = 0; $cont <=10; $cont++){
        echo "$num x $cont = " . ($num * $cont) . "<br>";
    }
    echo "<hr>";

    /* 4 - Criar um algoritmo em PHP para ler 2 números  e mostrar todos os números pares entre eles (inclusive) */

    echo "<h2>Exercício 04</h2>";
    $num1 = 30;
    $num2 = 20;

    if($num2 < $num1){
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }

    do{
        if(($num1 % 2) == 0){
            echo $num1 . "<br>";
        }
        $num1++;
    }while($num1<=$num2);

    echo "<hr>";

?>