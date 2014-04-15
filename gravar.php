<?php
    require_once 'fontes/conexao.php';
?>
<html>
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap.css"
    </head>
    <body>
        <?php
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $idade = $_POST['idade'];
            $sexo = $_POST['sexo'];
            
            
            if(!isset($nome) || !isset($sexo) || !is_numeric($idade))
            {
                echo "Dados Inválidos !";
            }
            else
            {
                $sql = "INSERT INTO cliente (nome, email, idade, sexo) 
                    VALUES ('".$nome."','".$email."','".$idade."','".$sexo."')";
                if(mysql_query($sql))
                {
                    echo '<div class="jumbotron">';
                    echo '<h1 class="parabens">Parabéns !</h1>';
                    echo '<p>Dados cadastrados com sucesso!</p>';
                    echo '<br /><br />';
                    echo '<p><a class="btn btn-primary btn-lg" role="button" href="index.html">VOLTAR</a></p>';
                    echo '</div>';
                    
                }
                else
                {
                    echo mysql_error();
                }
            
                
           }
        
        ?>
       
    </body>
</html>