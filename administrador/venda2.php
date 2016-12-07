<?php
  require_once('../config.php'); 
 
  if(isset($_POST['qtd']) && empty($_POST['qtd']) == false){

    $numvenda = addslashes($_POST['numvenda']);
    $prod = addslashes($_POST['prod']);
    $qtd = addslashes($_POST['qtd']);

    
    
    $sql = "INSERT INTO produtovenda(`venda`, `produto`, `quantidade`, `valor`) VALUES ((SELECT MAX(id) FROM vendas WHERE numero = $numvenda),$prod,$qtd,(SELECT valor FROM produtos WHERE id = $prod))";
    $PDO->query($sql);

    header("Location: inicial-administrador.php");
  }
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon2.ico">

    <meta charset="UTF-8">
    <script src="../biblioteca/jquery/jquery-1.5.2.min.js"></script>
    <script src="../biblioteca/jquery/jquery.maskedinput-1.3.min.js"></script>

    <title>Adicionar Venda</title>

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
            <a class="navbar-brand" href="inicial-administrador.php">Lancho'System</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="inicial-administrador.php">Home</a></li>
              <li><a href="cadastro-administrador.php">Administrador</a></li>
              <li><a href="cadastro-usuario.php">Usuários</a></li>              
              <li><a href="cadastro-funcionario.php">Funcionários</a></li>  
              <li><a href="cadastro-produto">Produtos</a></li>  
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      
      <div>

	<div>
	<form method="POST">
		Numero Venda:
		<input type="text" class="form-control" style="width: 25%;" name="numvenda" /><br/>
		Produto:
		<input type="text" class="form-control" style="width: 25%;" name="prod" /><br/>
		Quantidade:
		<input type="text" class="form-control" style="width: 25%;" name="qtd" /><br/>
		<input type="submit" class="btn btn-success" value="Inserir" /><br/>
	</form>
	</div>
</body>

</html>