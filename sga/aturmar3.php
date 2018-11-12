<?php
// criar um insert que insira o cod do aluno e o cod na turma na tabela aluno_turma
	include "conexao.php";
	$cod_turma = $_POST['cod_turma']; //campo hidden
	$cod_aluno = $_POST['cod_aluno']; //campo hidden
	$sql = "insert into aluno_turma (cod_curso, cod_aluno) values ('$cod_turma', '$cod_aluno')";
	mysqli_query($con, $sql);

?>
Cadastro Efetuado, Aguarde, você está sendo redirecionado para pagina Inicial!
<meta http-equiv='refresh' content='2; index.php'/>