<?php session_start();
	include "conexao.php";
	
	$cod_aluno = $_SESSION['cod_aluno'];
	$sql_cod_aluno = "SELECT * FROM aluno where cod_aluno = '$cod_aluno'";
	$resultado = mysqli_query($con, $sql_cod_aluno) ;   
	$sql_turma = 'SELECT * FROM turma ORDER BY cod_turma';                
	$resultado_turma = mysqli_query($con, $sql_turma) ;    
	
	?>
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
		<?php foreach($resultado as $dado) : ?>
		<div class="jumbotron">
		<section class="sombra">
			<hr>
			<CENTER>
				<h3><strong> <i class="fas fa-users-cog"></i>Editar o aluno: <?=$dado['nome'] ?> </strong> </h3>
			</CENTER>
		</section>
		<form  method="post" action="editar_alunos_funcao.php">
			<div class="form-group">
				<label for="exampleInputEmail1">Código</label>
				<input type="text" name="cod_aluno" class="form-control" id="exampleInputEmail1" value="<?=$dado['cod_aluno'] ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Nome</label>
				<input type="text" name="nome" class="form-control" id="exampleInputPassword1" value="<?=$dado['nome'] ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Matricula</label>
				<input type="text" name="matricula" class="form-control" maxlength="8" id="exampleInputEmail1" value="<?=$dado['matricula'] ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Telefone</label>
				<input type="text" name="telefone" class="form-control" maxlength="10" id="exampleInputPassword1" value="<?=$dado['telefone'] ?>">
			</div>
			<label for="exampleInputPassword1">Turma</label>
			<select name="cod_turma" class="form-control">
				<?php foreach($resultado_turma as $dado_t) : ?>
				<option value="<?=$dado_t['cod_turma'] ?>"><?=$dado_t['cod_turma'] ?></option>
				<?php endforeach; ?>
			</select>
			<br>
			<button type="submit" class="btn btn-danger">Salvar</button>
			<?php endforeach; ?>
		</form>
		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/docs.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>