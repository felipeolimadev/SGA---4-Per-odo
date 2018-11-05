<?php
    $cod_turma = $_POST['cod_turma'];
    $servidor  = 'localhost';
    $bd        = 'sga';
    $usuario  = 'root';
    $con = mysqli_connect($servidor, $usuario, $senha, $bd);

    $sql = "DELETE FROM curso WHERE cod_turma = '$cod_turma'";
    $resultado = mysqli_query($con, $sql) ;
    $linhas = mysqli_num_rows($resultado); 

?>
<meta http-equiv='refresh' content='2; gerenciar_turmas.php'/>