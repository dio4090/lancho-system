<?php
  require_once('../config.php'); 
 ?> 
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
              <li class="active"><a href="../funcionario/cadastro-funcionario.php">Funcionários</a></li>  
              <li><a href="cadastro-produto.php">Produtos</a></li>  
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      

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

    <title>Administração de Usuários</title>

    <!-- Bootstrap core CSS -->
    <link href="../biblioteca/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../biblioteca/bootstrap-3.3.7/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <link href="../biblioteca/bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

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
  <?php
    $sql = "SELECT * FROM vendedores"; 
    $sql = $PDO->query($sql);
    if($sql->rowCount() == 0){
      echo '<div class="alert alert-danger" role="alert">';
      echo '<strong>Aviso!</strong> Você ainda não possui funcionarios cadastrados.';
      echo '</div>';

      echo'<div class="jumbotron">';
      echo'<div class="container" style="width:300px; height: 200px; overflow: auto;">';
      echo'<img src="../biblioteca/img/broken-file.png">';
    }
  ?>

        <?php
          $r = 'excluir';
          $sql = "SELECT * FROM vendedores"; 
          $sql = $PDO->query($sql);
          
          if($sql->rowCount() > 0){

            echo'<div class="jumbotron">';
            echo'<div class="container" style="width:1200px; height: 400px; overflow: auto;">';
            echo'<h2>Lista de funcionarios</h2>';
            echo '<table class="table table-hover">';
            echo  '<thead>';
            echo'<tr>';
            echo'<th>';
            echo'<th>Nome</th>';
            echo'<th>Telefone</th>';
            echo'<th>Endereço</th>';
            echo'<th>CPF</th>';
            echo'<th>Data de Nascimento</th>';
            echo'<th>Salário</th>';
            echo'</tr>';
            echo'</thead>';
            echo '<tbody>';
            echo '<tr>';

            foreach ($sql-> fetchAll() as $vendedores) {
                    echo '<td rowspan="2">'.$vendedores['id'].'</td>';
                    echo'<td>'.$vendedores['nome']. '</td>';
                    echo'<td>'.$vendedores['telefone'].'</td>';
                    echo'<td>'.$vendedores['endereco'].'</td>';
                    echo'<td>'.$vendedores['cpf'].'</td>';
                    echo'<td>'.$vendedores['dataNasc'].'</td>';
                    echo'<td>R$ '.$vendedores['salario'].'</td>';
                    echo '<td><a href="editar-funcionario.php?id='.$vendedores['id'].'" class="btn btn-warning">&#9999; Editar</a></td>';
                    echo '<td><a href="excluir-funcionario.php?id='.$vendedores['id'].'" class="btn btn-danger">&#10006; Excluir</a></td>';
                echo '</tbody>';
              echo '</tr>';
            } 
          } 
        ?>
        </table>
      </div>
    </div>
      <a href="adicionar-funcionario.php" class="btn btn-success">&#10010 Novo Funcionario</a>

      
    <div class="container theme-showcase" role="main">

    <br>
  <br>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Cadastro de vendedores</h1>
        <p>Esta página é responsável pela manutenção dos vendedores do sistema de Lancho'System.</p>
      </div>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../biblioteca/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="../biblioteca/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../biblioteca/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>