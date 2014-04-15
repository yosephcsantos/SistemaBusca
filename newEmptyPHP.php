<!--
(((editar.php)))
</?php 
 $id = isset($_GET["id"])?base64_decode($_GET["id"]):0;
 include_once 'fontes/config.php';
 
 $sql = "SELECT * FROM produto WHERE id_produto = ".$id;
 $rs = mysql_query($sql,$con);
 if(mysql_num_rows($rs)==1){
     $reg = mysql_fetch_array($rs);
 
?>
<h3>Editar Produto</h3>
<form action="atualiza.php" method="post">

    Código do PRODUTO: <input type="text" name="id_produto" id="id_produto" value="<?php echo $reg['id_produto'];?>" />
    <br /><br />
    Nome: <input type="text" name="nome_produto" id="nome_produto" value="<?php echo $reg['nome_produto'];?>" />
    <br /><br />
    Descricao: <input type="text" name="descricao" id="descricao" value="<?php echo $reg['descricao'];?>"/>
    <br /><br />
    Quantidade: <input type="text" name="quantidade" id="quantidade" value="<?php echo $reg['quantidade'];?>"/>
    <br /><br />
    Estoque: <input type="text" name="estoque" id="estoque" value="<?php echo $reg['estoque'];?>" />
    <br /><br />
    Preco: <input type="text" name="preco" id="preco" value="<?php echo $reg['preco'];?>"/>
    <br /><br />
    Categoria:
    <select name="categoria" id="categoria">
        <option value="DVD"</?php echo ($reg["categoria"]=="DVD")?"selected":"";?> >DVD</option>
        <option value="JOGOS"</?php echo ($reg["categoria"]=="JOGOS")?"selected":"";?>>JOGOS</option>
        <option value="ROUPAS"</?php echo ($reg["categoria"]=="ROUPAS")?"selected":"";?>>ROUPAS</option>
        <option value="OUTROS"</?php echo ($reg["categoria"]=="OUTROS")?"selected":"";?>>OUTROS</option>
    </select>
    <br /><br />
    <input type="submit" value="Editar produto" />
</form>
</?php } ?>
<br />
</?php 
    if(isset($_GET["msg"]))
        echo base64_decode($_GET["msg"]);
?>
-->

























<!--
((((buscar.php)))
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/estilo.css" type="text/css" />
    </head>
    <body>
        
        <div id="container">
            <div id="links">
                <a href="index.php">Voltar</a>
            </div>
            <div id="conteudo">
                <h3>Formulario de Busca de Clientes</h3>
                <form action="buscar.php" method="post">
                    Informe o nome: <input type="text" name="nome" />
                    <input type="submit" value="Buscar Dados" />
                </form>
                <hr />
                </?php
                if(isset($_POST["nome"])){
                    $nome = trim($_POST["nome"]);
                    $sql = "select * from cliente where nome like '".$nome."%'";
                    
                    include_once 'fontes/conexao.php';
                    $rs = mysql_query($sql, $con);
                    //Se o numero de linhas da consulta for maior que 0
                    if(mysql_num_rows($rs) > 0){
                ?>
                <table width="100%">
                    <tr>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>SEXO</th>
                        <th>IDADE</th>
                    </tr>
                    </?php while($registro = mysql_fetch_array($rs)){ ?>
                    <tr>
                        <td></?php echo $registro["nome"]; ?></td>
                        <td></?php echo $registro["email"]; ?></td>
                        <td></?php echo $registro["sexo"]; ?></td>
                        <td></?php echo $registro["idade"]; ?></td>
                    </tr>
                    </?php } ?>
                </table>
                </?php 
                    }else{
                        echo "<p>Nenhum cliente encontrado</p>";
                    }
                }
                ?>
            </div>
        </div>
        
    </body>
</html>
-->








<!--
(((validacao.js)))
/*function validarDados(){
    
    //Resgatar os dados do formulario (JavaScript)
    var nome = document.getElementById("nome");
    var email = document.getElementById("email");
    var idade = document.getElementById("idade");
    
    //Converter o valor para caixa baixa
    email.value = email.value.toLowerCase();
    
    var flag = true;
    var msg = "";
    //Expression Language -- Definir as regras de validação
    var regraNome = /^[A-Za-z á-ú]{3,30}$/;
    var regraIdade = /^[0-9]{1,3}$/;
    var regraEmail = /^[a-z0-9_.-]+@[a-z0-9_.-]+\.[a-z]{2,4}$/;
    
    //Se a regra do nome nao estiver conforme o valor digitado 
    //no campo nome
    if(!nome.value.match(regraNome)){
        msg += "Preencha o campo nome corretamente<br />";
        flag = false;
    }
    
    if(!email.value.match(regraEmail)){
        msg += "Preencha o campo e-mail corretamente<br />";
        flag = false;
    }
    
    if(!idade.value.match(regraIdade)){
        msg += "Preencha o campo idade apenas com numeros<br />";
        flag = false;
    }else if(idade.value <= 0 || idade.value > 120){
        msg += "Idade deve ser entre 1 e 120<br />";
        flag = false;
    }
    //Nao houve erro
    if(flag == true){
        return true;
    }else{
        document.getElementById("resp").innerHTML = msg;
        return false;
    }
    
}*/-->


<!--(((conexao.php)))
/*
//Conectar com o banco de dados (mysql)
//mysql_connect(Caminho do banco, usuario, senha)
$con = mysql_connect("localhost", "root", "");
//Selecionar qual a base de dados sera utilizada
//mysql_select_db(nome do banco, Conexao)
mysql_select_db("php02", $con);*/-->





<!--
(((gravar.php)))
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        </?php
            
        /*
         * GRAVAR DADOS NO BANCO DE DADOS
         * 
         * 1 - Resgatar os dados do formulario
         * 2 - Validar os dados no servidor (php)
         * 3 - Montar o SCRIPT SQL para inserir no banco com os valores resgatados
         * 4 - Abrir a conexao com o banco de dados
         * 5 - Executar o SQL gerado no banco de dados
         * 6 - Fechar a conexao com o banco de dados
         */
        
        //1 - Resgatar os dados
        $nome = trim($_POST["nome"]);
        $email = trim($_POST["email"]);
        $idade = trim($_POST["idade"]);
        $sexo = trim($_POST["sexo"]);
        
        //2 - Validar os dados no server
        //Se o nome for vazio, ou sexo nao existir, ou idade nao for numero
        if($nome == "" || !isset($sexo) || !is_numeric($idade)){
            echo "Os dados estao invalidos!" . $nome . " ---";
        }else{
            
            //3 - Montar o SQL para gravar
            $sql = "insert into cliente values(NULL, 
          '".$nome."', '".$email."', '".$sexo."', ".$idade.")";
            
            //4 - Abrir a conexao;
            /*include           require            include_once            require_once*/
            include_once 'fontes/conexao.php';
            
            //5 - Executar o SQL no banco de dados
            if(mysql_query($sql, $con)){
                echo "<p>Cliente cadastrado com sucesso</p>";
            }else{
               echo "<p>Nao pode cadastrar o cliente</p>" ;
            }
            
            //6 - Fechar conexao
            mysql_close($con);
        }
    
        ?>
        <br />
        <a href="index.php">Voltar</a>
    </body>
</html>-->




<!--
(((index.php)))
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script src="js/validacao.js" type="text/javascript" ></script>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    </head>
    <body>
        
        <div id="container">
            <div id="links">
                <a href="buscar.php">Buscar Clientes</a>
            </div>
            
            <div id="conteudo">
                <h3>Formulario de Cadastro de Clientes</h3>
                
                <form action="gravar.php" method="post" onsubmit="return validarDados()">
                    Informe o nome: <input type="text" name="nome" id="nome" />
                    <br><br />
                    Informe o e-mail: 
                    <input type="text" name="email" id="email" />
                    <br /><br />
                    Informe a idade: 
                    <input type="text" name="idade" id="idade" />
                    <br /><br />
                    Informe o sexo: 
                    <input type="radio" name="sexo" id="sexo" value="M"
                           checked="checked" />M 
                    <input type="radio" name="sexo" id="sexo" value="F" />F 
                    <br /><br />
                    <input type="submit" value="Cadastrar Cliente" />
                </form>
                <br /><br />
                <div id="resp"></div>
            </div>
        </div>
        
    </body>
</html>-->