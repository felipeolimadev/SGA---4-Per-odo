
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SGA.: Cadastro Aluno</title>
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
				<h2>Cadastro de Aluno</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
				<form method="POST" action="processa_cad_aluno.php">
					<!--<label>NomeAluno</label>-->
					<i class="fas fa-user-circle"></i>  Aluno:<input type="text" name="nome" placeholder="Digite o nome  completo" class="form-control">
					 <i class="fas fa-graduation-cap"></i> Matricula:<input type="text" name="matricula" placeholder="Informe a  Matricula" class="form-control" maxlength="8">
					<i class="fas fa-phone"></i>  Telefone:<input type="text" name="telefone" placeholder="ex.: 33 3333-3333" class="form-control" maxlength="10"><br>			
					
														
					<input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-success"><br>
					
					
					
				</form>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>