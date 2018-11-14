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
            <h3><strong> <i class="fas fa-user-graduate"></i> Matricular Alunos nas Turmas e Cursos</strong> </h3>
          </CENTER>
        </section>
        <a class="navbar-brand">
          <a class="navbar-brand"></a>

      </div>
      <form method="POST" action="aturmar3.php">


        <?php
         include "conexao.php";                                           
        $sql = 'SELECT * FROM aluno ORDER BY nome';
        $resultado = mysqli_query($con, $sql) ;
        $linhas = mysqli_num_rows($resultado); 
                                                
                                                
                                                ?>

        <label for="status">Alunos: </label>
        <select class="form-control" name="cod_aluno">
          <?php foreach($resultado as $dado) : ?>
          <option value="<?=$dado['cod_aluno']?>">
            <?=$dado['nome']?>
          </option>
          <?php endforeach; ?>
        </select>
        <?php                                                   
          
          $sql = 'SELECT * FROM turma ORDER BY cod_turma';
          $resultado = mysqli_query($con, $sql) ;
          $linhas = mysqli_num_rows($resultado); 
                                                                                                
        ?>

        <label for="status">Turmas: </label>
        <select class="form-control" name="cod_turma">
          <?php foreach($resultado as $dado) : ?>
          <option value="<?=$dado['cod_turma']?>">
            <?=$dado['cod_turma']?> - <?=$dado['letra']?>
          </option>
          <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" name="btnCadUsuario" value="Matricular" class="btn btn-success">


      </form>


    </div>


  </div>
  





  </div>


  </div>
  </main><div class="container theme-showcase" role="main">


    <div class="page-header">
        <h1>Turmas e Alunos </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>ID do Aluno</th>
                        <th>Código da Turma</th>
                        
                    </tr>
                </thead>
                <tbody>
                      <?php
                        include"conexao.php";
                        $sql = 'SELECT * FROM aluno, turma WHERE aluno.cod_turma = turma.cod_turma ORDER BY aluno.nome';                
                        $resultado = mysqli_query($con, $sql) ;                
                        $linhas = mysqli_num_rows($resultado);  
                      ?>
                <tbody>
                    <?php foreach($resultado as $dado) : ?>
                    <tr class="active">
                        <td>
                            <?=$dado['nome']?>
                        </td>
                        <td>
                            <?=$dado['cod_aluno']?>                            
                        </td>
                        
                        <td>
                            <?=$dado['cod_turma']?>
                        </td>
                        
                    </tr>
                    <?php endforeach; ?>
        </div>
    </div>
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