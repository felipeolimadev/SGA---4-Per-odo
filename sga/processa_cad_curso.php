
 <?php
        include "conexao.php";        

        $nome = $_POST['nome'];
        $sigla = $_POST['sigla'];
      
        
        mysqli_query($con, "insert into curso (nome, sigla)"
                . "values ('$nome', '$sigla')");
            

?>

Cadastro Efetuado, Aguarde, você está sendo redirecionado para pagina Inicial!
<meta http-equiv='refresh' content='3; index.php'/>
