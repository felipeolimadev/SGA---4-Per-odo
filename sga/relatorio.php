<?php

function quant_aluno(){
    include "conexao.php";
    $sql = "SELECT * FROM aluno";
    $query = mysqli_query($con, $sql) ;
    $quant = mysqli_num_rows($query);
    return $quant;

}

function quant_turma(){
    include "conexao.php";
    $sql = "SELECT * FROM turma";
    $query = mysqli_query($con, $sql) ;
    $quant = mysqli_num_rows($query);
    return $quant;
}
function quant_curso(){
    include "conexao.php";
    $sql = "SELECT * FROM curso";
    $query = mysqli_query($con, $sql) ;
    $quant = mysqli_num_rows($query);
    return $quant;
}
function quant_func(){
    include "conexao.php";
    $sql = "SELECT * FROM curso";
    $query = mysqli_query($con, $sql) ;
    $quant = mysqli_num_rows($query);
    return $quant;
}





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

    <div class="container">
    <h1>Quantidades</h1>
    <h2>Alunos :<?=quant_aluno() ?></h2>
    <h2>Turmas: <?=quant_turma() ?></h2>
    <h2>Cursos: <?=quant_curso() ?></h2>
    <h2>Funcionários: <?=quant_func() ?></h2>
    
    
    
    
    </div>