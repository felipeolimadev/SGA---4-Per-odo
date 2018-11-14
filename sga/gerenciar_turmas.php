<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<?php	include "head.php";	?>

<body role="document">
  <?php
  		include_once("menu_admin2.php");
  	?>

  <div class="container theme-showcase" role="main">



    <div class="container theme-showcase" role="main">


      <div class="jumbotron">
        <section class="sombra">
          <hr>
          <CENTER>
            <h3><strong> <i class="fas fa-users-cog"></i> Gerenciar Turmas</strong> </h3>
          </CENTER>
        </section>
        <a class="navbar-brand">
          <a class="navbar-brand"></a>

      </div>
      <?php
      include "tabela_cursos.php";
      ?>
      <br><br>
      <?php
      include "tabela_turmas.php"
      ?>

    </div>
  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>