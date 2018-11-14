<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<?php	include "head.php";	?>

<body role="document">
  <?php
  		include_once("menu_admin2.php");
  	?>

  <div class="container theme-showcase" role="main">


    <div class="jumbotron">
      <section class="sombra">
        <hr>
        <CENTER>
          <h3><strong> <i class="fas fa-users-cog"></i> Gerenciar Cursos</strong> </h3>
        </CENTER>
      </section>
      <a class="navbar-brand">
        <a class="navbar-brand"></a>

    </div>

    <br><br>
    <!--   -->
    <div class="container theme-showcase" role="main">


      <div class="page-header">
        <h1>Cursos Cadastradas </h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Sigla</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php
              	
                include"conexao.php";

                $sql = 'SELECT * FROM curso ORDER BY cod_curso';
                $resultado = mysqli_query($con, $sql) ;
                $linhas = mysqli_num_rows($resultado);  

                  ?>
            <tbody>
              <?php foreach($resultado as $dado) : ?>
              <tr>
                <td>
                  <?=$dado['cod_curso']?>
                </td>
                <td>
                  <?=$dado['nome']?>
                </td>
                <td>
                  <?=$dado['sigla']?>
                </td>
                <td>
                  <form method="POST" action="excluir_curso.php">
                    <input type="checkbox" name="cod_curso" value="<?=$dado['cod_curso']?>">Excluir<br>
                    <input type="submit" value="Confirmar">
                  </form>
                </td>
              </tr>
              <?php endforeach; ?>



        </div>


      </div>
      </main>





    </div>


  </div>
  </main>






  </div>


  </div>
  </main>


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