<!DOCTYPE html>
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
                <div id="links">
                    <a href="buscar.php"class="btn btn-primary btn-lg">Buscar Clientes</a>
                </div>
                <header>
                    <h3>Formulário de Cadastro de Clientes</h3>
                </header>                
                <br />
                <form name="form" action="gravar.php" method="post" onsubmit="return validarDados();">
                    <label for="nome">Informe o nome:</label> 
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" />
                    <br /><br />
                    <label for="email">Informe o email:</label> 
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" />
                    <br /><br />
                    <label for="idade">Informe o idade:</label> 
                    <input type="text" name="idade" id="idade" class="form-control" placeholder="Idade" />
                    <br /><br />
                    <label for="sexo">Informe o sexo:</label>
                    <div class="controls">
                        <label class="radio">
                            <input type="radio" name="sexo" id="sexo" value="M" checked="checked" />M
                        </label>
                        <label class="radio"> 
                            <input type="radio" name="sexo" id="sexo" value="F" />F
                        </label>
                    </div>
                    <br /><br />
                    
                    <input type="submit" class="btn btn-default navbar-btn" value="Cadastrar Cliente" />
                    <input type="reset" class="btn btn-default navbar-btn" name="reset" value="Limpar">
                </form>
                
                <br /><br />
               
            
            </section>            
        </div>
    </body>
</html>