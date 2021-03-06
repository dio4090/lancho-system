<?php
	require 'config.php';

	session_start();

	if(isset($_POST['email']) && empty($_POST['email']) == false) {
			$email = addslashes($_POST['email']);
			$senha = md5(addslashes($_POST['senha']));

		
		$sql = $PDO->query(" SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");
	

	  if($sql->rowCount() > 0) {

      $dado = $sql->fetch();

      if($dado['tipo'] == 'Administrador') {

    		$_SESSION['id'] = $dado['id'];

    		header("Location: administrador/inicial-administrador.php");
      } else if($dado['tipo'] == 'Funcionario'){

        $_SESSION['id'] = $dado['id'];

        header("Location: funcionario/inicial-funcionario.php");
      }
		
	   } else {
    echo '<div class="alert alert-danger" role="alert">';
    echo '<strong>Aviso!</strong> Verifique se digitou o login corretamente.';
    echo '</div>';
  }

	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="biblioteca/materialize/css/materialize.min.css">
  <link href="css/login.css" rel="stylesheet">
</head>

<body>
  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>

      <h5 class="indigo-text">Por favor, entre na sua conta</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="POST">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Coloque seu email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='senha' id='password' />
                <label for='password'>Coloque sua senha</label>
              </div>
              <label style='float: right;'>
	          <a class='pink-text' href='#!'><b>Esqueceu a senha?</b></a>
	         
	      </label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <!-- <a href="#!">Create account</a> --> 
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>