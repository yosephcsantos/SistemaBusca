<?php
  require_once 'fontes/conexao.php';

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="Text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap.css" />
    </head>
    <body>
        <div id="container">
            <section id="conteudo">
                
                    <header>
                        <h3>Formulário de Busca</h3>
                    </header>
                    <br />
                    <form action="buscar.php" method="post">
                        <label>Nome:</label>
                        <input type="search" name="nome" id="nome" placeholder="Todos Resultados">
                        <input type="image" src="img/busca.png" class="imgBusca">
                        <!--<label for="nome">Informe o nome:</label>
                        <input type="text" class="form-control" placeholder="Nome" name="nome" />
                        <input type="submit" class="btn btn-default navbar-btn" value="Pesquisar"/>-->
                    </form>
                
                <hr class="alert-info hr" />
                
                <?php
                    if(isset($_POST["nome"]))
                    {
                      
                      $sql = "SELECT * FROM cliente WHERE nome like '".$_POST["nome"]."%'";
                        
                        $rs = mysql_query($sql);
                        if(mysql_num_rows($rs)>0){
                    
                ?>
                <div class="panel panel-default">
                            
                            <?php
                                if(mysql_num_rows($rs)>1)
                                {
                                    echo '<div class = "panel-heading">Resultados Encontrados</div>';
                                }else if(mysql_num_rows($rs) == 1){
                                    echo '<div class = "panel-heading">Resultado Encontrado</div>';
                                }
                            ?>
                            <!-- Table -->
                            <table width="100%" class="table">
                                <tr class="panel-heading">
                                    <th>CÓDIGO</th>
                                    <th>NOME</th>
                                    <th>EMAIL</th>
                                    <th>SEXO</th>
                                    <th>IDADE</th>
                                </tr>
                                <?php
                                while ($row = mysql_fetch_array($rs)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['sexo']; ?></td>
                                        <td><?php echo $row['idade']; ?></td>
                                        <td>
                                            <a href="editar.php?id=<?php echo base64_encode($row["id"]); ?>" onclick="return confirm('Deseja editar este produto ?');">EDITAR</a>
                                        </td>
                                        <td>
                                            <a href="excluir.php?id=<?php echo base64_encode($row["id"]); ?>" onclick="return confirm('Deseja excluir este produto ?');">EXCLUIR</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                          </table>
                </div>
                
                <?php
                    }else
                        {
                            echo '<p>Nenhum Cliente Encontrado !</p>';
                            echo mysql_error();
                        }
                    }
                ?>
                <div id="links">
                    <a href="index.html"class="btn btn-primary btn-lg">Voltar</a>
                </div>
            </section>
        </div>
             
    </body>
</html>