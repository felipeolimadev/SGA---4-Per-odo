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
          <table id="tabela"  class="table lista">
            <thead>
              <tr>
                <th>ID</th>
                <th><div>Nome</div><input type="text" id="txtColuna1"/></th>                
                <th><div>Matricula</div><input type="text" id="txtColuna2"/></th>
                <th><div>Telefone</div><input type="text" id="txtColuna3"/></th>
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
  
      <script src="js/bootstrap.min.js"></script>
      <script src="js/docs.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="/js/ie10-viewport-bug-workaround.js"></script>
      <script type="text/javascript">  
      $(function(){
	$("#tabela input").keyup(function(){		

		var index = $(this).parent().index();
		var nth = "#tabela td:nth-child("+(index+1).toString()+")";
		var valor = $(this).val().toUpperCase();
		$("#tabela tbody tr").show();
		$(nth).each(function(){
			if($(this).text().toUpperCase().indexOf(valor) < 0){
				$(this).parent().hide();
			}
		});
	});

	$("#tabela input").blur(function(){
		$(this).val("");
	});	
});
      </script>
</body>

</html>