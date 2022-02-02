<?php
    //1 - Desenvolva um código que declare duas variáveis 
    //e exiba no navegador o seu conteúdo
    echo "Exercício 01 <br>";

    //Declaração das variáveis
    $var1 = "Estou estudando PHP";
    $var2 = 20;

    //Exibindo o conteúdo das variáveis
    echo "Conteúdo da primeira varável é: $var1 <br>";
    echo "Conteúdo da segunda varável é: $var2 <br>";

    echo "--------------------------------------------";
    /*
        2 - Desenvolva um código que declare duas variáveis do tipo integer e 
        some seus valores e exiba o resultado no navegador:
    */

    echo "<br> Exercício 02 <br>";
    $valor1 = 10;
    $valor2 = 15;

    $resultado = $valor1 + $valor2;

    //Forma direta
    //echo $valor1 + $valor2;

    //Forma com resultado
    echo "A soma dos valores é: $resultado";

    echo "<br>--------------------------------------------";


    /*
        3 - Escreva um programa que declare uma variável inteira e 
        atribua o valor 10 a mesma. Declare uma variável float e 
        atribua para a mesma o valor 20.3. Como saída o programa deverá 
        imprimir, usando as variáveis declaradas, o seguinte resultado:
	a.	O valor inteiro é 10.
	b.	O valor real é 20.3.
    
    
    */
    echo "<br> Exercício 03 <br>";
    $int = 10;
    $float = 20.3;
    
    //O Ponto (.) junta dois valores (concatena)
    echo "O valor inteiro é: " . $int . "<br> ";
    echo "O valor real é: " . $float;
    echo "<br>--------------------------------------------";

    /**
     * 4 - Escreva um programa que declare 6 variáveis do tipo caractere 
     * e atribua a elas as letras a, l, u, n, o, s. 
     * O programa deverá imprimir, usando todas as variáveis declaradas, 
     * o seguinte resultado: alunos.    * 
     * 
     */
     echo "<br> Exercício 04 <br>";
     $a = "a";
     $l = "l";
     $u = "u";
     $n = "n";
     $o = "o";
     $s = "s";

     echo $a . $l . $u . $n . $o . $s; 

     echo "<br>--------------------------------------------";
?>