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
    $minhaVar = "Estou aprendendo PHP";
    echo "<br><br>Variável do tipo string, $minhaVar <br>";
    
    //O var_dump() exibe o tipo de dado gurdado navariável
    var_dump($minhaVar);

    echo "<br>";
    $numero = 1;
    var_dump($numero);

    echo "<br>";
    $numero2 = "1";
    var_dump($numero2);

    $teste = false;



?>