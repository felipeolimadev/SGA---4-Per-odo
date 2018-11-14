<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<?php	include "head.php";	?>

<body role="document">
  <?php
  		include_once("menu_admin2.php");
  	?>

    
    <div class="container theme-showcase" role="main"><br>

    	<?php
  		include_once("cadastrar_novo_curso.php");
  		?>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      

 
	<br>
      
	<?php require_once('rodape.php'); ?>


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

