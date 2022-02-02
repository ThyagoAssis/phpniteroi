<?php

    echo "<h1> Solução dos exercícios de estrutura de Decisão </h1>";
    echo "<hr>";

    //1 - Elabore um algoritmo para ler um valor inteiro e informar, 
    //através de uma mensagem se este valor é um número par ou ímpar.

    echo "<h2> Exercício 01 </h2>";


    $numero = 21;
    $resto = $numero%2;
    
    if ($resto == 0)
        echo "O $numero é par.";
    else
        echo "O $numero é impar";

    echo "<hr>";

    /**
     * 2 - Implemente um programa que leia dois valores inteiros e verificar se o primeiro 
     * é múltiplo do segundo, 
     * seu programa deverá exibir a mensagem: “São múltiplos” ou “Não são múltiplos” 
     */

    echo "<h2> Exercício 02 </h2>";
    $valor1 = 20;
    $valor2 = 30;

    if($valor1%$valor2 == 0){
        echo "Os valores são multiplos";
    }else {
        echo "Não são multiplos";
    }

    echo "<hr>";

    /**
     * 3 - Desenvolva um programa para ler um valor inteiro e apresentar
     *  a. Exibir a mensagem “número negativo” se n < 0.
     *  b. Exibir a mensagem “zero” se n = 0.
     *  c. Exibir a mensagem “número positivo” se n > 0.
     */
    
    echo "<h2> Exercício 03 </h2>";
    $valorInteiro = -11;

    if ($valorInteiro < 0) {
        echo "O valor $valorInteiro é negativo";
    }else if ($valorInteiro === 0){
        echo "O valor $valorInteiro é zero";
    }else if ($valorInteiro > 0) {
        echo "O valor $valorInteiro é positivo";
    }else {
        echo "Valor não encontrado";
    }
    echo "<hr>";

    /**
     * 4 - Escreva um programa para que leia um número e verifique 
     * se ele se encontra no intervalo entre 5 e 20.
     */

     /**
      *Comparadores lógicos 
      * && - A duas condições ou mais devem ser verdadeiras (conectivo e)
      * || - Umas das alternativas deve ser veradeiras ( conectivo ou )      * 

      */

    echo "<h2> Exercício 04 </h2>";
    $num = 25;

    if ($num >= 5 && $num <= 20){
        echo "O numero $num esta no intervalo entre 5 e 20";
    }else {
        echo "O numero $num não esta no intervalo entre 5 e 20";
    }

    echo "<hr>";

    /**
     * 5 - Desenvolva um programa para ler dois valores inteiros e apresentar 
     * a adição destes valores quando o x > y, caso contrário, 
     * deve ser efetuado a multiplicação deles.
     */

    echo "<h2> Exercício 05 </h2>";
     $x = 10;
     $y = 5;

     if($x > $y) {
         echo  "a soma dos valores é: " . ($x + $y);
     }else{
        echo  "a multiplicação dos valores é: " . ($x * $y);
     }
?>