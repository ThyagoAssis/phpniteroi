<?php
    /*
        Para incluir um arquivo dentro de outro arquivo PHP, 
        Temos duas funçoes:
         
            >include - Em caso  de erros ele enviar um alerta.
                include_once  - Inclui o arquivo uma única vez

            >require  -  Em caso de erro ele para a execução da Aplicação
                require_once - Inclui o arquivo uma única vez
    */
    
    //Incluindo o Header
    include __DIR__ . "/includes/header.php";

    //Corpo da pagina
    include __DIR__ . "/includes/home.php";

    //Incluindo o footer
    include __DIR__ . "/includes/footer.php";


?>