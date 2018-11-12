
 <?php
        include "conexao.php";
        
        
        $letra = $_POST['letra'];
        $periodo = $_POST['periodo'];
        $cod_curso = $_POST['cod_curso'];
        $ano = $_POST['ano'];
 	$semestre = $_POST['semestre'];
        
        mysqli_query($con, "insert into turma (letra, periodo, cod_curso, ano, semestre )"
                . "values ('$letra', '$periodo', '$cod_curso', '$ano', '$semestre')");
            

?>

Cadastro Efetuado, Aguarde, você está sendo redirecionado para pagina Inicial!
<meta http-equiv='refresh' content='2; cadastro_turma.php'/>
