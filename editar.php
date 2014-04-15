<?php
        
    $id = isset($_GET['id'])?base64_decode($_GET['id']):0;
    include_once 'fontes/conexao.php';
    $sql = "SELECT * FROM cliente WHERE id = ".$id;
    $rs = mysql_query($sql,$con);
    
    if(mysql_num_rows($rs) == 1)
    {
        $registro = mysql_fetch_array($rs);
    

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script src="js/validacao.js" type="text/javascript"></script>
        <!--<link rel="stylesheet" type="text/css" href="css/estilo.css" />-->
        <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap.css">
    </head>
    <body>
        <div id="container">
            <section id="conteudo">
                <header>
                    <h3>Editar dados do Cliente</h3>
                </header>                
                <br />
                <form action="atualiza.php?id=<?php echo base64_encode($registro["id"]);; ?>" method="post">
                    <label for="nome">Informe o nome:</label> 
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" value="<?php echo $registro['nome'];?>" />
                    <br /><br />
                    <label for="email">Informe o email:</label> 
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $registro['email'];?>" />
                    <br /><br />
                    <label for="idade">Informe o idade:</label> 
                    <input type="text" name="idade" id="idade" class="form-control" placeholder="Idade" value="<?php echo $registro['idade'];?>" />
                    <br /><br />
                    <label for="sexo">Informe o sexo:</label>
                    <div class="controls">
                        <label class="radio">
                            <input type="radio" name="sexo" id="sexo" value="M"<?php echo ($registro["sexo"]=="M")?"selected":"";?> checked="checked" />M
                        </label>
                        <label class="radio"> 
                            <input type="radio" name="sexo" id="sexo" value="F"<?php echo ($registro["sexo"]=="F")?"selected":"";?> />F
                        </label>
                    </div>
                    <br /><br />
                    
                    <input type="submit" class="btn btn-default navbar-btn" value="Editar dados" />
                    <input type="reset" class="btn btn-default navbar-btn" name="reset" value="Limpar">
                </form>
                
                <br /><br />
                <div id="resp"></div>
            
            </section>            
        </div>
    </body>
</html>
<?php } ?>
<?php 
    if(isset($_GET["msg"]))
        echo base64_decode($_GET["msg"]);
?>