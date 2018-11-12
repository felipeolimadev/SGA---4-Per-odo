
 <?php
        include "conexao.php";
        
        
        $nomealuno = $_POST['nomealuno'];
        $matricula = $_POST['matricula'];
        $telefone = $_POST['telefone'];
      
        
        mysqli_query($con, "insert into aluno (nomealuno, matricula, telefone)"
                . "values ('$nomealuno', '$matricula', '$telefone')");
            

?>

Cadastro Efetuado, Aguarde, você está sendo redirecionado para pagina Inicial!
<meta http-equiv='refresh' content='3; index.php'/>
