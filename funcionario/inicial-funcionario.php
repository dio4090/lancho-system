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

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../biblioteca/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../biblioteca/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../biblioteca/bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      
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
              <li class="active"><a href="inicial-funcionario.php">Home</a></li>
              <li><a href="cadastro-usuario.php">Usuários</a></li> 
              <li><a href="cadastro-funcionario.php">Funcionários</a></li>                
              <li><a href="inicial-produto.php">Produtos</a></li>  
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      
      
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Mantenha o controle!</h1>
        <p class="lead">Nessa pagina você pode administrar todos os usuários do sistema atualizando, cadastrando ou removendo os memos.</p>
        <p><a class="btn btn-lg btn-success" href="cadastro.php" role="button">Cadastro de usuários</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Aviso de atualização!</h2>
          <p class="text-danger">Nessa próxima quinta-feira (03/10/2016) faremos uma atualização no site agradeçemos sua compreenção.</p>
          <a class="btn btn-primary" href="#" role="button">Mais Detalhes &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Eventos</h2>
          <p>Nesse mês dia (16/10/2016) faremos um grande grande evento no centro de conveenções do shopping Rio Mar, contamos com a presença de todos para a apoiar a maior ferramenta de administração de lanchonete do Brasil.</p>
          <p><a class="btn btn-primary" href="#" role="button">Mais Detalhes &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Apoiamos o médico sem fronteiras</h2>
          <p>De que adianta ser a maior ferraenta de administração de lanchonetes do Basil se não apoiarmos uma ação tão justa como o médico sem fronteiras. Clique no botão a baixo para saber como ajudar esses verdadeiros herois.</p>
          <p><a class="btn btn-primary" href="http://www.msf.org.br/como-ajudar" target="_blank" role="button">Mais Detalhes &raquo;</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Lancho'System, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../biblioteca/bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>