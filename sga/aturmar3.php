<?php
// criar um insert que insira o cod do aluno e o cod na turma na tabela aluno_turma
	include "conexao.php";
	$cod_turma = $_POST['cod_turma']; //campo hidden
	$cod_aluno = $_POST['cod_aluno']; //campo hidden	
        $sql = "UPDATE aluno SET cod_turma = '$cod_turma' WHERE cod_aluno = '$cod_aluno'";
	mysqli_query($con, $sql);

?>
<?php
 echo "<center><h1> Aluno ". $cod_aluno. " alterado para a turma: ". $cod_turma. "</h1></center>";
 ?>
<meta http-equiv='refresh' content='2; aturmar_alunos.php'/>