<!--  

ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "Necessário preencher todos os campos";
	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";
	}elseif(stristr($dados['senha'], "'")) {
		$erro = true;
		$_SESSION['msg'] = "Caracter ( ' ) utilizado na senha é inválido";
	}else{
		$result_usuario = "SELECT code FROM login WHERE code='". $dados['nome'] ."'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este usuário já está sendo utilizado";
		}
		
		$result_usuario = "SELECT  code FROM login WHERE code='". $dados['code'] ."'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este e-mail já está cadastrado";
		}
	}
//var_dump($dados);
	if(!$erro){
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		


?php
session_start();

			$result_usuario = "INSERT INTO login (status, code, senha, nome, painel ) VALUES (
						'" .$dados['status']. "',
						'" .$dados['code']. "',
						'" .$dados['senha']. "'
						'" .$dados['nome']. "',
						'" .$dados['painel']. "',
						)";
		$resultado_usario = mysqli_query($conn, $result_usuario);
		if(mysqli_insert_id($conn)){
			$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
			header("Location: index.php");
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar o usuário";
		}
	}
	
}
?>
-->
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SGO:: Cadastro de Usuarios | UNIPAC Teófilo Otoni-MG</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
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
					<i class="fas fa-user-circle"></i>  Aluno:<input type="text" name="nomealuno" placeholder="Digite o nome  completo" class="form-control">
					 <i class="fas fa-graduation-cap"></i> Matricula:<input type="text" name="matricula" placeholder="Informe a  Matricula" class="form-control">
					<i class="fas fa-phone"></i>  Telefone:<input type="text" name="telefone" placeholder="ex.: 33 3333-3333" class="form-control"><br>			
					
														
					<input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-success">
					<i class="fa fa-share" aria-hidden="true"></i><button ><a href="index-home.php">Voltar</a></button>
					
					
				</form>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>