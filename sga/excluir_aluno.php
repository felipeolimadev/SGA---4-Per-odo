<?php
    $cod_aluno = $_POST['cod_aluno'];
    include"conexao.php";
    
    $con = mysqli_connect($servidor, $usuario, $senha, $bd);

    $sql = "DELETE FROM aluno WHERE cod_aluno = '$cod_aluno'";
    $resultado = mysqli_query($con, $sql) ;   
    echo "<h1>Aluno excluído com sucesso!</h1>";  

?>
<meta http-equiv='refresh' content='2; gerenciar_alunos.php'/>