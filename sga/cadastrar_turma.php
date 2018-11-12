<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SGA.: Cadastro de Turmas</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
	 crossorigin="anonymous">
	<link href="img/fd.png" rel="shortcut icon" type="image/x-icon">
</head>

<body>
	<div class="slider-wrapper">
		<div class="slide-top"></div>
		<div class="slide-bottom"></div>
	</div>

	<div class="container">
		<div class="form-signin" style="background: #1C1C1C;">
			<h2>Cadastro de Turma</h2>
			<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
			<form method="POST" action="processa_cadastro.php">
				<!--<label>Nome</label>-->
				Letra:<input type="text" name="letra" placeholder="Digite a leta" class="form-control">

				Período:
				<div class="form-check">
				<input class="form-check-input" type="radio" name="periodo" id="exampleRadios1" value="1">
				<label class="form-check-label" for="exampleRadios1">
					1º Período
				</label>
				</div>
				<div class="form-check">
				<input class="form-check-input" type="radio" name="periodo" id="exampleRadios1" value="2">
				<label class="form-check-label" for="exampleRadios1">
					2º Período
				</label>
				</div>

				<i class="fas fa-graduation-cap"></i> Curso:<label for="curso"> </label>

				<?php
                                            include"conexao.php";

                                            $sql = 'SELECT * FROM curso ORDER BY nome';
                                            $resultado = mysqli_query($con, $sql) ;
                                            $linhas = mysqli_num_rows($resultado); 
                                        
                                        
                                        ?>
				<select class="form-control" name="cod_curso">
					<?php foreach($resultado as $dado) : ?>
					<option value="<?=$dado['cod_curso']?>">
						<?=$dado['nome']?>
					</option>
					<?php endforeach; ?>
				</select>
				<!--<label>E-mail</label>-->
				<i class="fas fa-calendar-alt"></i> Ano:<input type="text" name="ano" placeholder="Ex.: 2018" class="form-control">

				<label for="status">Semestre: </label>
				<select class="form-control" name="semestre" required="">
					<option value="0"> Selecione o semestre desejado </option>
					<option value="1"> 1ºSemestre </option>
					<option value="2"> 2ºSemestre </option>
				</select>

				<input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-success">



			</form>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>