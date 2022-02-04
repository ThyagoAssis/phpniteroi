<?php
    echo ("
    
        <h1>Arrays em PHP</h1>

        <p> 
            -Array é uma caixa com divisórias, e cada divisória recebe uma identificação chamada de índice.
            -Podemos escrever um array de duas formas:
        </p>
    
    ");

    echo "Forma 01 <br>"; 
    $frutas = [ "Maçã", "Pera" , "Melancia" , "Mamão" ];
    echo $frutas[1];

    echo "<hr>";

    echo "Segunda Forma <br>";
    $meses = array( "Janeiro", "Fevereiro" , "Março" , "Abril", "Maio" );
    echo $meses[3];

    echo "<hr>";

    echo "Uso do foreach para ler um array <br>";

    foreach($meses as $indice => $conteudo){
        echo "Mes: " . $conteudo . "<br>";
    }

    echo "<hr>";

    echo "Contando o tamanho do array <br>";
    echo "A função count() verifica o tamanho do array <br>";

    echo "O tamanho do array mese e: " . count($meses);

    echo "<hr>";
?>

