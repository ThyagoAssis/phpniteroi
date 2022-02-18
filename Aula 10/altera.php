<!--FORM PEGA ID-->


<form action="#" method="post">
    <label for="">Informe o ID: </label>
    <input type="text" name="id_cons">
    <button>Consultar</button>
</form>
<hr>

<?php
    
    if(isset($_POST['id_cons'])){

        $id = $_POST['id_cons'];
        
        //Conectar ao banco  de dados
        require_once("conecta.php");
        //Preparar a query
        $query = $conecta->prepare("SELECT * FROM tb_autor WHERE idAutor = :ID");
        $query->execute(array(
            ':ID'=>$id
        ));

        //Fatiar a tabela
        $resultado = $query->fetchALL(PDO::FETCH_ASSOC);
        foreach($resultado as $rows){ 
?>

<!--FORM ALTERA-->
<form action="update.php" method="post">
    <label>ID</label>
    <input type="text" name="id" value="<?php echo $rows['idAutor']?>">

    <label>Nome Autor</label>
    <input type="text" name="nome" value="<?php echo $rows['nomeAutor']?>">

    <label>CPF</label>
    <input type="text" name="cpf" value="<?php echo $rows['cpf']?>">
    <button>Atualizar</button>
</form>


<?php
        }    
    }
?>