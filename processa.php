<?php
if(isset($_POST['button'])){
	$code =$_POST['code'];
    $password =$_POST['password'];
    
    if($code == ''){
    	 echo "<script language='javascript'> window.alert('Por favor, digite o usuario ou código de acesso!!');</script>";
        }
        else if( $password == ''){
        	echo "<script language='javascript'> window.alert('Por favor, digite sua senha de acesso!!!');</script>";
        } else{
			$sql = "SELECT * FROM  login WHERE 	code = '$code' AND senha = '$password'";
			
			$result = mysqli_query($conexao, $sql);	
			if(mysqli_num_rows($result) >0){	
					while($res_1 = mysqli_fetch_assoc($result)){
					$status = $res_1['status'];
					$code = $res_1['code'];
					$senha = $res_1['senha'];
					$nome = $res_1['nome'];
					$painel = $res_1['painel'];
					
					if($status == 'Inativo'){
						echo "<h2> Usuario com Bloqueio - Sem Permição de  Realizar Login </h2>";
						echo "<script language='javascript'> window.alert('Você está Inativo, procure o setor responsavel para liberar seu acesso ao sistema!!');</script>";

						
					}else{
						
						session_start();
						$_SESSION['code'] = $code;
						$_SESSION['senha'] = $senha;
						$_SESSION['nome'] = $nome;
						$_SESSION['painel'] = $painel;
						
						if($painel == 'admin'){
							echo "<script language='javascript'> window.location='admin';</script>";
							
						} else  if($painel == 'c.educativo'){
							echo "<script language='javascript'> window.location='c.educativo';</script>";
						} else  if($painel == 'aluno'){
							echo "<script language='javascript'> window.location='aluno';</script>";	
						}else  if($painel == 'gestao'){
							echo "<script language='javascript'> window.location='gestao';</script>";
						}else  if($painel == 'secretaria'){
							echo "<script language='javascript'> window.location='secretaria';</script>";
						}else  if($painel == 'administracao'){
							echo "<script language='javascript'> window.location='administracao';</script>";
						}
						
						
						
					}
					
				}
				
				} else{
				echo "<h2> Erro Fatal - Tente Novamente  </h2>";echo "<script language='javascript'> window.alert('Dados Incorretos - Usuario ou Senha Invalido!');</script>";			
			}
		}
}

?>