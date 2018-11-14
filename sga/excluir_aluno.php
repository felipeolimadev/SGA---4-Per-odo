<?php
    session_start() ;
    include"conexao.php";
    
    $con = mysqli_connect($servidor, $usuario, $senha, $bd);
    $aluno = $_SESSION['cod_aluno'];

    $sql = "DELETE FROM aluno WHERE cod_aluno = '$aluno' ";
    $resultado = mysqli_query($con, $sql) ;   
    echo "<h1>Aluno excluído com sucesso!</h1>";  

?>
<meta http-equiv='refresh' content='2; gerenciar_alunos.php'/>