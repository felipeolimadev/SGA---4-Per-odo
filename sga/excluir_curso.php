<?php
    $cod_curso = $_POST['cod_curso'];
    include"conexao.php";
    
    $con = mysqli_connect($servidor, $usuario, $senha, $bd);

    $sql = "DELETE FROM curso WHERE cod_curso = '$cod_curso'";
    $resultado = mysqli_query($con, $sql) ;   
    echo "<h1>Curso excluído com sucesso!</h1>";  

?>
<meta http-equiv='refresh' content='2; gerenciar_cursos.php'/>