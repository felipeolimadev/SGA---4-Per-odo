<?php

function conectar(){
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "root";
	$bd = "sga";
	
	$con = new mysqli($servidor, $usuario, $senha, $bd);
	return $con;
}
$conexao = conectar();
?>