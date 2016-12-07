<?php
  require_once('../config.php'); 

    $clientes = ($_POST['select']);
    $contador = ($_POST['contador']);

    $sql = "INSERT INTO vendas SET cliente = '$clientes',  = '$senha', tipo = '$tipo'";
    $PDO->query($sql);

  if (isset($_POST["Submit"])){
   $_POST['contador']+=1;
  }

  if (isset($_POST["Submit2"])){
   $_POST['contador']-=1;
  }
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
            <a class="navbar-brand" href="inicial-administrador.php">Lancho'System</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="inicial-administrador.php">Home</a></li>
              <li><a href="cadastro-administrador.php">Administrador</a></li>
              <li><a href="cadastro-usuario.php">Usuários</a></li>              
              <li><a href="cadastro-funcionario.php">Funcionários</a></li>  
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

    <title>Cadastro de Produtos</title>

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

  </head>

  <body>

<?php
          $r = 'excluir';
          $sql = "SELECT * FROM produtos"; 
          $sql = $PDO->query($sql);

          if($sql->rowCount() == 0){
            echo '<div class="alert alert-danger" role="alert">';
            echo '<strong>Aviso!</strong> Você ainda não possui produtos cadastrados.';
            echo '</div>';

            echo'<div class="jumbotron">';
            echo'<div class="container" style="width:300px; height: 200px; overflow: auto;">';
            echo'<img src="../biblioteca/img/broken-file.png">';
          }

          if($sql->rowCount() > 0){

            echo'<form method="post">';
            echo'<div class="jumbotron">';
            echo'<div class="container" style="width:1200px; height: 400px; overflow: auto;">';
            echo'<h2>Lista de produtos</h2>';
            echo '<table class="table table-hover">';
            echo  '<thead>';
            echo'<tr>';
            echo'<th>';
            echo'<th>Nome</th>';
            echo'<th>Valor</th>';
            echo'<th>Fornecedor</th>';
            echo'</tr>';
            echo'</thead>';
            echo '<tbody>';
            echo '<tr>';

            foreach ($sql-> fetchAll() as $produtos) {
             $nome = $produtos['nome'];

              echo '<td rowspan="2">'.$produtos['id'].'</td>';
              echo'<td>'.$produtos['nome']. '</td>';
              echo'<td>'.$produtos['valor'].'</td>';
              echo'<td>'.$produtos['fornecedor'].'</td>';
              echo '</tbody>';
              echo '</tr>';
            } 
          }

        ?>
            </table>
          </div>
        </div>

    </br>            
    </br>
    Quantidade: 
	  <input type="text" class="form-control" style="width: 7%;" name="contador" value="<?php echo isset($_POST['contador']) ? $_POST['contador'] : 1; ?>"/>

    <?php 
      $sql = "SELECT * FROM clientes"; 
      $sql = $PDO->query($sql);

      echo '</br>';
      echo 'Cliente:';
      echo '<select class="form-control" name="select" style="width: 17%;">';

      foreach ($sql-> fetchAll() as $clientes) {
          echo '<option value="Cliente">'.$clientes['nome'].'</option>';
      }

      echo '</select></br>';
      echo '</br>';

    ?>

<?php 
      $sql = "SELECT * FROM produtos"; 
      $sql = $PDO->query($sql);

      echo '</br>';
      echo 'Produto:';
      echo '<select class="form-control" name="select" style="width: 17%;">';

      foreach ($sql-> fetchAll() as $produtos) {
          echo '<option value="Produto">'.$produtos['nome'].'</option>';
      }
      echo '</select></br>';
    ?>


    <td><input type="submit" class="btn btn-warning" name="Submit" value="+"></td>
    <td><input type="submit" class="btn btn-danger" name="Submit2"value="-"></td>
    </br>


    <input  type="submit" value = "&#10003 Finalizar compra" />
    <a href="inicial-administrador.php" class="btn btn-success">&#10003 Finalizar compra</a>

  </form>

      

    <div class="container theme-showcase" role="main">

    <br>
  <br>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Venda</h1>
        <p>Esta página é responsável pela venda de produtos no sistema Lancho'System.</p>
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