<?php
    $cod_turma = $_POST['cod_turma'];
    include"conexao.php";
    
    $con = mysqli_connect($servidor, $usuario, $senha, $bd);

    $sql = "DELETE FROM turma WHERE cod_turma = '$cod_turma'";
    $resultado = mysqli_query($con, $sql) ;   
    echo "<h1>Turma excluída com sucesso!</h1>";  

?>
<meta http-equiv='refresh' content='2; gerenciar_turmas.php'/>