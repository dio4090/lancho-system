<?php
  require_once('../config.php'); 
 
  if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    $tipo = "Funcionario";

    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $endereco = addslashes($_POST['endereco']);
    $cpf = addslashes($_POST['cpf']);
    $dataNasc = addslashes($_POST['dataNasc']);
    $salario = addslashes($_POST['salario']);

    // Usuario
    $sql = "INSERT INTO usuario SET email = '$email', senha = '$senha', tipo = '$tipo'";
    $PDO->query($sql);

    
    // Funcionario
    $sql = "INSERT INTO vendedores SET nome ='$nome', telefone ='$telefone' , endereco = '$endereco',
        cpf = $cpf, dataNasc = '$dataNasc', salario = $salario";  
    $PDO->query($sql);

    header("Location: cadastro-funcionario.php");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon2.ico">

    <meta charset="UTF-8">
    <script src="../biblioteca/jquery/jquery-1.5.2.min.js"></script>
    <script src="../biblioteca/jquery/jquery.maskedinput-1.3.min.js"></script>

    <title>Editar Usuário</title>

    <!-- Bootstrap core CSS -->
    <link href="../biblioteca/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../biblioteca/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../biblioteca/bootstrap-3.3.7/docs/assets/jsie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- MÁSCARA -->
     <script>
      jQuery(function($){
             $("#campoData").mask("99/99/9999");
             $("#campoTelefone").mask("(99) 999-9999");
             $("#campoCpf").mask("99999999999");     
      });
     </script>
  </head>

  <body>
  
     <div class="container">
      
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="inicial-funcionario.php">Lancho'System</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="inicial-funcionario.php">Home</a></li>
              <li><a href="cadastro-usuario.php">Usuários</a></li>              
              <li class="active"><a href="cadastro-funcionario.php">Funcionários</a></li>  
              <li><a href="cadastro-produto">Produtos</a></li>  
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      
      <div>

    <div class="jumbotron">
      <form method = "POST">
        <h2>Novo Funcionario</h2> 
        *Nome:<br/>
        <input type="text" name="nome" required="true"/><br/>
        *Telefone:<br/>
        <input type="text" name="telefone" id="campoTelefone" required="true" /><br/>
        Endereço:<br/>
        <input type="text" name="endereco" /><br/>
        *CPF:<br/>
        <input type="text" name="cpf" id="campoCpf" required="true"/><br/>
        *Data de Nascimento:<br/>
        <input type="text" name="dataNasc" id="campoData" required="true"/><br/>
        *Salário:<br/> 
        <input type="text" name="salario" required="true"/><br/>

        <h2>Dados de Login:</h2>
        *Email:<br/> 
        <input type="text" name="email"  required="true"/><br/>
        *Senha:<br/>
        <input type="password" name="senha" required="true"/><br/><br/>
        <br/>  
        <input class="btn btn-success" type="submit" value = "&#10003 Cadastrar" />
        <a href="cadastro-funcionario.php" class="btn btn-danger">&#10005 Cancelar</a>    
      </form>
  </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Dúvidas sobre a alteração do cadastro?</h1>
        <p>Esta página irá mostrar os requisitos mínimos para alterar qualquer  usuário.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Nossa missão</h2>
          <p>Ser um sistema para cadastro de lanchonete de exemplo em todos país.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Lancho'System</h2>
          <p>Veja nossas últimas promoções de contrato para lanchonetes</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Inicial</h2>
          <p>Voltar para a página de administração dos usuários do sistema.</p>
          <p><a class="btn btn-default" href="inicial-funcionario.php" target="_blanck" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>


    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>

      <footer>
        <p>&copy; 2016 Lancho'System, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="..biblioteca/bootstrap-3.3.7/dist/jsbootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="..biblioteca/bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>