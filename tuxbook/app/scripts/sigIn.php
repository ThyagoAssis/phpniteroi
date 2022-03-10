<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--INCIO PHP-->

<?php
include("erros.php");
//Verifica se o botão logar foi pressionado
if (isset($_POST['btn-logar'])) {

    //Conexão com o banco de dados
    require_once("conecta.php");


    //Declara as variáveis
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo $email;
    echo $senha;
    //Montar a query
    $query = $conecta->prepare("SELECT * FROM tb_users WHERE email = :EMAIL AND senha = :SENHA");

    //Executar a query
    $query->execute(array(
        ':EMAIL' => $email,
        ':SENHA' => $senha
    ));
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    //Verificar se tem dados na tb_user
    //count - verifica o tamnho  de um array
    if (count($users) <= 0) {
        session_start();
        $_SESSION['erros'] = true;
        $_SESSION['msgErros'] = "Usuário e ou senha não encontrados";
        header('Location: ../../index.php');

    } else {
        //Pega esse usuário
        $acheiVc = $users[0];

        //Inciar a sessão
        session_start();
        //Passar os dados do bd para a sessão
        $_SESSION['nome'] = $acheiVc['nome'];
        $_SESSION['sobrenome'] = $acheiVc['sobrenome'];
        $_SESSION['email'] = $acheiVc['email'];
        $_SESSION['nivel'] = $acheiVc['nivel'];

        //Verificar se o usuário estar logado
        $_SESSION['login'] = true;
        header('Location: ../../index.php');
    }
} else {
    echo "deu erro";
}

?>
<!--FIM PHP-->