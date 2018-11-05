<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SGA:: Cadastro de Cursos</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
		<link href="img/fd.png" rel="shortcut icon" type="image/x-icon">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	</head>
	<body>
		<div class="slider-wrapper">
  		<div class="slide-top"></div>
  		<div class="slide-bottom"></div>
		</div>

		<div class="container">
			<div class="form-signin" style="background: #1C1C1C;">
				<h2>Cadastro de Curso</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
				<form method="POST" action="processa_cada_curso.php">
					<!--<label>NomeAluno</label>-->
					 <i class="fas fa-graduation-cap"></i>  Curso:<input type="text" name="nome_aluno" placeholder="Digite o nome  do curso" class="form-control">
				<i class="fas fa-sign-in-alt"></i> Sigla:<input type="text" name="nome_aluno" placeholder="Sigla" class="form-control"><br>
					
														
					<input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-success">
					
					
					
				</form>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>