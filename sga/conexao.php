<?php
$servidor = 'localhost';
$bd       = 'sga';
$usuario  = 'root';
$senha    = '12345678';
$con = mysqli_connect($servidor, $usuario, $senha, $bd);
//Defini o charset que será retornado do banco de dados
mysqli_set_charset($con, "utf8");
?>