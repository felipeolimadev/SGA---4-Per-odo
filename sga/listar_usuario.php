<?php @session_start(); ?>
<?php $painel_atual="aluno" ;?>

<?php include_once("conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Página Administrativa ::SGO</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-theme.min.css" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">   
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
	
    </head>

  <body role="document">
  	<?php
  		include_once("menu_admin.php");?>
   
    <div class="container theme-showcase" role="main">

    	<?php
  		include_once("painel_admin.php");
        $resultado=mysql_query("SELECT * FROM usuarios ORDER BY 'id'");
        $linhas=mysql_num_rows ($resultado);

  		?>     

      <div class="page-header">
        <h1>Lista de Usuarios</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Status</th>
                <th>Code</th>
                <th>Nome</th>
                <th>Painel</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
                <?php                  
                  
                  while($linhas = mysqli_fetch_array($resultado)){
                    echo "<tr>";
                      echo "<td>".$linhas['id']."</td>";
                      echo "<td>".$linhas['status']."</td>";
                      echo "<td>".$linhas['code']."</td>";
                      echo "<td>".$linhas['nome']."</td>";
                      echo "<td>".$linhas['painel']."</td>";
                      echo "<td>Editar - Visualizar - Apagar</td>";
                    echo "</tr>";
                  }                        
                ?>
            </tbody>
          </table>
        
        </div>
      </div>

      <?php
  		include_once("lixo_admin.php");
  		?>
      
  		<!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>