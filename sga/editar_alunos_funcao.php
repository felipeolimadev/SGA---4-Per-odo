<?php

$cod_aluno = $_POST['cod_aluno'];
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$telefone = $_POST['telefone'];
$cod_turma = $_POST['cod_turma'];


include "conexao.php";

$sql = "UPDATE aluno SET matricula = '$matricula', nome = '$nome', matricula = '$matricula', telefone = '$telefone', cod_turma = '$cod_turma' WHERE cod_aluno = '$cod_aluno'";  
         
$resultado = mysqli_query($con, $sql) ;

?>
<meta http-equiv='refresh' content='2; gerenciar_alunos.php'/>