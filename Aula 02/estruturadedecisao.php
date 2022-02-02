<?php
    echo ("
    
        <h1> Estrutura de decisão </h1>
        <h3>Operadores lógicos</h3>
        <ul>
            <li> == Verifica se possuem mesmo valor  </li>
            <li> === Verifica se são identicas </li>
            <li> != Verifica se são diferentes </li>
            <li> < Verifica se é menor </li>
            <li> > Verifica se é maior </li>
            <li> <= Verifica se é menor igual </li>
            <li> >= Verifica se é maior igual        
        </ul>

        <h3> Tipos de estrutura de decisão </h3>

        <ul>
            <li> Estrura Simples </li>
            <li> Estruturas Compostas </li>
            <li> Estruturas encadeadas </li>
            <li> Estrutra Compacta </li>
            <li> Estrutura Ternária </li>
            <li> Estrutura Multipla </li>        
        </ul>   
    
    ");

    echo "<h3> Estrutura simples - é dada por uma única decisão </h3>";

    $idade = 18;
    if ($idade >= 18) { echo "Você pode ir a festa"; };

    echo "<hr>";

    echo "<h3> Estrutura composta - é dada por uma única decisão e uma saída padrão</h3>";

    if ($idade >= 18) { 
        echo "Você pode ir a festa";
    }else {
        echo "Você não pode ir a festa";
    }

    echo "<hr>";

    echo "<h3> Estrutura encadeada - é dada por ter mais de uma decisão e uma saída padrão</h3>";
    
    $materia = "PHP"; 

    if ($materia == "PHP") {
        echo "Linguagem de pragamação voltada para Web";
    }else if ($materia == "Java"){
        echo "Linguagem de programação Robusta";
    }else if ($materia == "Python") {
        echo "Linguagem de programação muito fácil de aprender";
    }else {
        echo "Não conheço essa linguagem :{";
    }

    echo "<hr>";
    echo "<h3> Estrutura compacta - é dada pela ausencia das chaves</h3>";
    echo "<h3> A estrutura compacta só ocorre quando temos um único comando</h3>";

    if ($idade >= 18) 
        echo "Pode ir a festa";                
    else 
        echo "Não pode ira a festa";

    echo "<hr";
    echo "<h3> Estrutura ternária - Define um estrutura composta em uma única linha/h3><br>";

    echo ($idade >= 18) ? "Pode ir a festa" : "Não pode ir a festa";
    echo "<hr>";

    echo "<h3> Estrutura Multipla - É dado por definir varios testes  </h3><br>";

    $opcao = 2;

    switch($opcao){
        case 1: 
            echo "O valor é 1";
            break;
        case 2: 
            echo "O valor é 2";
            break;
        case 3:
            echo "O valor é 3";
            break;
        default:
            echo "Opção Invalida";
            break;
    };

   


  



?>