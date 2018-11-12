<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/fd.png" rel="shortcut icon" type="image/x-icon">

  <title>SGA.: Matricular Alunos nas Turmas e Cursos</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-theme.min.css" rel="stylesheet">
  <link href="theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
    crossorigin="anonymous">
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <script src="js/ie-emulation-modes-warning.js"></script>

</head>

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