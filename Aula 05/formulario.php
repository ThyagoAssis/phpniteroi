<?php
   //Decalração de variáveis
   $nome = $_POST["nome"];
   $cpf = $_POST["cpf"];
   $data = $_POST["data"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <h1>Formulario</h1>
    <hr>

    <form action="#" method="post">
        <labe>Nome: </label>
        <input type="text" placeholder="Informe o Nome:" name="nome">

        <label>CPF: </label>
        <input type="text" placeholder="Informe o CPF" name="cpf">

        <label>Nascimento: </label>
        <input type="date" name="data">

        <button>Enviar</button>
    </form>

    <h2 style="margin-top: 30px">Dados Cadastrados</h2>
    <hr>  
    <p>Nome:  <?php echo $nome ?></p>
    <p>CPF:  <?php echo $cpf ?></p>

</body>
</html>

<?php
    /* foreach($_POST as $index => $value) {
        echo "Nome do campo: " . $index . "<br>";
        echo "Valor do campo: " . $value . "<br>";

        echo "<hr>"; */
    /* } */
?>

