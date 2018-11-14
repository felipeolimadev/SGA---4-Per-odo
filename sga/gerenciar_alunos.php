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
          <table id="lista"  class="table lista">
            <thead>
              <tr>
                <th>ID</th>
                <th><div>Nome</div><div></th>                
                <th><div>Matricula</div></th>
                <th><div>Telefone</div></th>
                <th>Ações</th>
              </tr>
            </thead>
            
              <?php
              	
                include"conexao.php";               

                $sql = 'SELECT * FROM aluno ORDER BY nome';
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
                  <form method="POST" action="editar_e_excluir.php">
                    <input type="checkbox" name="cod_aluno" value="<?=$dado['cod_aluno']?>">Selecionar<br>
                    <input type="submit" name="editar" value="Editar">
                    <input type="submit" name="excluir" value="Excluir">
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
  
      <script src="js/bootstrap.min.js"></script>
      <script src="js/docs.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="/js/ie10-viewport-bug-workaround.js"></script>
    
</body>

</html>