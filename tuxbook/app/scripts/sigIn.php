
<!--INCIO PHP-->
<?php
    //Verifica se o botão logar foi pressionado
    if(isset($_POST['btn-logar'])){

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
            ':EMAIL'=>$email,
            ':SENHA'=>$senha
        ));
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        var_dump($users);
        //Verificar se tem dados na tb_user
        //count - verifica o tamnho  de um array
        if(count($users) <= 0 ){
            echo "Email e senha não encontrados";
        }else{
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
    }else{
        echo "deu erro";
    }

?>
<!--FIM PHP-->