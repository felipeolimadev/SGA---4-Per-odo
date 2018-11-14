
 <?php
        include "conexao.php";
        
        
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $telefone = $_POST['telefone'];
        $cod_turma = $_POST['cod_turma'];
      
        
        mysqli_query($con, "insert into aluno (nome, matricula, telefone, cod_turma)"
                . "values ('$nome', '$matricula', '$telefone','$cod_turma')");
            
                echo $nome;
                echo "<br>";
                echo $matricula;
                echo "<br>";
                echo $telefone;
                echo "<br>";
                echo $cod_turma;
?>

Cadastro Efetuado, Aguarde, você está sendo redirecionado para pagina Inicial!
<meta http-equiv='refresh' content='3; index.php'/>
