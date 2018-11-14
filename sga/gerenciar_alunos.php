<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<?php
  include "head.php";
?>

<body role="document">
  <?php
  		include_once("menu_admin2.php");
  	?>

  <div class="container theme-showcase" role="main">


    <div class="jumbotron">
      <section class="sombra">
        <hr>
        <CENTER>
          <h3><strong> <i class="fas fa-users-cog"></i> Gerenciar Alunos</strong> </h3>
        </CENTER>
      </section>
      <a class="navbar-brand">
        <a class="navbar-brand"></a>

    </div>

    <br><br>
    <div class="container theme-showcase" role="main">


      <div class="page-header">
        <h1>Alunos Cadastrados </h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table lista">
            <thead>
              <tr>
                <th>ID</th>
                <th><div>Nome</div><div><input id="filtro-nome"/></div></th>                
                <th>Matricula</th>
                <th>Telefone</th>
                <th>Ações</th>
              </tr>
            </thead>
            
              <?php
              	
                include"conexao.php";               

                $sql = 'SELECT * FROM aluno ORDER BY cod_aluno';
                $resultado = mysqli_query($con, $sql) ;
                $linhas = mysqli_num_rows($resultado);  

                  ?>
            <tbody>
              <?php foreach($resultado as $dado) : ?>
              <tr>
                <td>
                  <?=$dado['cod_aluno']?>
                </td>
                <td>
                  <?=$dado['nome']?>
                </td>
                <td>
                  <?=$dado['matricula']?>
                </td>
                <td>
                  <?=$dado['telefone']?>
                </td>
                <td>
                  <form method="POST" action="excluir_aluno.php">
                    <input type="checkbox" name="cod_aluno" value="<?=$dado['cod_aluno']?>">Excluir<br>
                    <input type="submit" value="Confirmar">
                  </form>
                </td>

              </tr>
              <?php endforeach; ?>
            </tbody>
        </table>



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