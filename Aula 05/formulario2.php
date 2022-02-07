<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <h1 style="text-align: center">Formulario</h1>
    <hr>

    <form action="script.php" method="post">
        <labe>Nome: </label>
        <input type="text" placeholder="Informe o Nome:" name="nome">

        <label>CPF: </label>
        <input type="text" placeholder="Informe o CPF" name="cpf">

        <label>Nascimento: </label>
        <input type="date" name="data">

        <button>Enviar</button>
    </form>


</body>
</html>