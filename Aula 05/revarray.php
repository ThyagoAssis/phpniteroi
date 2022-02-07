<?php

    echo "<h1> Revisão Array </h1>";

    echo "<p> Formas criação do array</p>";

    //Forma 01
    $colecao = ["Ferrari", "Fusca", "Mustang"];
    echo $colecao[1];

    //Forma 02
    $turma = array("Thyago", "Marcos", "Paula");
    foreach($turma as $valor){
        echo $valor . "<br>";
    }

    print_r($turma);


    
//Funçoes do Array
//Tamanho do array
echo "<br>tamanho array" . count($colecao);

//Juntar Um ou Mais Arrays (Combinar):
print_r(array_merge($colecao, $turma));

//Remover o Último Elemento do Array:
$fruits = ['Uva', 'Abacaxi', 'Abacate', 'Laranja'];

array_pop($fruits);

var_dump($fruits);

//Remover o Primeiro Elemento de um Array:
$fruits = ['Laranja', 'Uva', 'Abacaxi', 'Abacate'];

array_shift($fruits);

var_dump($fruits);

//Adicionar um Novo Elemento no Final do Array:
$fruits = ['Laranja', 'Uva', 'Abacaxi', 'Abacate'];

$newFruit = 'Tangerina';
array_push($fruits, $newFruit);

var_dump($fruits);
echo "<hr>";
//Adicionar um Novo Elemento no Inicio do Array:
$cart = ['Arroz', 'Feijão', 'Macarrão', 'Batata'];

$newItem = 'Extrato';
array_unshift($cart, $newItem);

var_dump($cart);
echo "<hr>";
//Remover Elementos Repetidos de um Array:
$cart = ['Arroz', 'Feijão', 'Macarrão', 'Batata', 'Arroz', 'Batata'];

$cart = array_unique($cart);

var_dump($cart);
echo "<hr>";
//Ordena um Array em Ordem Decrescente:
$cart = [
    1 => 'Feijão',
    0 => 'Arroz',
    2 => 'Macarrão',
    3 => 'Batata',
];

arsort($cart);

var_dump($cart);

echo "<hr>";

//Ordena um Array em Ordem Crescente:
$cart = [
    1 => 'Feijão',
    0 => 'Arroz',
    2 => 'Macarrão',
    3 => 'Batata',
];

asort($cart);

var_dump($cart);


//Ordenar um Array:
/* Também é possível ordenar um array com sort(), essa função é mais comum, porque também organiza os índices do array: */

$cart = [
    1 => 'Feijão',
    0 => 'Arroz',
    2 => 'Macarrão',
    3 => 'Batata',
];

sort($cart);

var_dump($cart);

//Arrays Super_Globais

$_POST = []; //Enviar as informações de um formulario de forma escondida
$_GET = []; // Os dados do formulrio são exibidos na URl









?>