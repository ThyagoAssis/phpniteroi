<?php
    echo ("
    
        <h1>Variáveis</h1>
        <h2>O que são variáveis?</h2>

        <p>
            As variáveis são elementos básicos na programação, posi elas armazenam 
            dados que usuaremos em nossa aplicação.
        </p>

        <h2>Tipos de variáveis</h2>
        <ul>
            <li>string - caractere ou texto simples. </li>
            <li>integer - Números inteiros (positivos, negativos e o zero)</li>
            <li>float - Valores que possuem virgula (Números fracionários)</li>
            <li>boolean - Valores verdadeiro(true) ou falsos(false)</li>
            <li>array - é uma caixa com divisões
        </ul>
    
        <p>
            <strong> Obs: </strong>
            O PHP é um liguagem fracamente tipada, ou seja, não é necessário
            informar o tipo de dado daquela variável.
        </p> 
    ");

    echo ("
        <h2>Regras para criação de nome de variáveis</h2>
        <ul>
            <li>Nome dentro de um contexto (nome, endereco, telefone)</li>
            <li>Utilizar o padrão camelCase (nomeCompleto, senacNiteroiManha)</li>
            <li>O único caracter especial a ser usado é o underline (nome_Completo, 
            _telefone)</li>
            <li>Usar numeros no final do nome (nome01, nome_01)</li>
        </ul>
    
    ");

    echo "Declarando variáveis";
    /* $minhaVar = "Estou aprendendo PHP";
    echo "<br><br>Variável do tipo string, $minhaVar <br>";
    
    //O var_dump() exibe o tipo de dado gurdado navariável
    var_dump($minhaVar);

    echo "<br>";
    $numero = 1;
    var_dump($numero);

    echo "<br>";
    $numero2 = "1";
    var_dump($numero2);

    $teste = false; */

    echo "<br><br> Declarando variavel do tipo string <br><br>";
    $minhaVar = 'Estude PHP';
    var_dump($minhaVar);

    echo "<br><br> Declarando variavel do tipo integer <br><br>";
    $minhaVar2 = 100;
    var_dump($minhaVar2);

    //$minhaVar3 = '100';
    //var_dump($minhaVar3)

    echo "<br><br> Declarando variavel do tipo float <br><br>";
    $minhaVar4 = 10.5;
    var_dump($minhaVar4);

    echo "<br><br> Declarando variavel do tipo boolean <br><br>";
    $minhaVar5 = true;
    var_dump($minhaVar5);

    echo "<br><br> Declarando variavel do tipo array <br><br>";
    $minhaVar6 = [10, 'pera', 'mamão'];
    var_dump($minhaVar6);


?>