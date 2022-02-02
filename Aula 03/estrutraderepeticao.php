<?php
    echo ("
    
        <h1> Estruturas de Repetição </h1>
        <p>Estruras de repetição serve para executar uma operação inúmeras vezes</p>

        <h2> Estruturas mais usadas em PHP</h2>
        <ul>
            <li> FOR </li>
            <li> WHILE </li>
            <li> DO WHILE </li>
            <li> FOREACH </li>
        </ul>

        <h2>Desafio estrutura de repetição:</h2>
        <p>Escolha uma das estruturas de repetição for, while ou do while e resolva a tarefa abaixo:
            <p>Constriur um progrma que conte ate 100 e exiba essa contagem na tela</p> 
    
    ");

    //Solução do desafio
    echo "<h3>Solução com o for</h3>"; 


    for ($i = 0; $i <= 5; $i++){
        echo $i . "<br>"; 
        //echo "Turma Top <br>";
    }
    echo "<hr>";
    echo "<h3>Solução com o while</h3>";
    
    $cont = 0;

    while($cont <= 6){
        echo $cont . "<br>";
        $cont++;
    }

    echo "<hr>";
    echo "<h3>Solução com o do while</h3>";

    $varControl = 0;
    do{
        echo $varControl . "<br>";
        $varControl++;
    }while($varControl <= 7);

    //Obs: a diferença entre while e do while é que no DO WHILE o bloco de comandos 
    //é executado pelo menos uma vez. 











?>