<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Página para realizar login">
	<link href="img/fd.png" rel="shortcut icon" type="image/x-icon">

	<title> SGA.: Sistema de Gestão Acadêmica On-line IPCA's</title>


	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<link rel="icon" href="img/fd.png">


</head>

<body>
	<div class="slider-wrapper">
		<div class="slide-top"></div>
		<div class="slide-bottom"></div>
	</div>
	<div id="caixa-login">
		<div id="logo">

			<img src="img/logosga.png" width="290" height="150" /></div>


		<form name="form" method="post" action="" enctype="multipart/form-data">
			<table>
				<tr>
					<td>
						<h1> Login: </h1>
					</td>
				</tr>
				<tr>
					<td><input type="text" name="code" placeholder="Usuario ou Código de Acesso" /></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Senha" /></td>
				</tr>
				<tr>
					<td><input class="input" type="submit" name="button" value="Acessar" /></td>

				</tr>

				<tr>
					<td width="200" align="left"><br><br><br><br><br><br>
						<p>
							<font face="Tahoma" size="4px" color="f00" float="left">
								<?php
									include"conexao.php";
									$meses = array (1 => "Janeiro", 
													2 => "Fevereiro", 
													3 => "Março", 
													4 => "Abril", 
													5 => "Maio", 
													6 => "Junho", 
													7 => "Julho", 
													8 => "Agosto", 
													9 => "Setembro", 
													10 => "Outubro",
													11 => "Novembro", 
													12 => "Dezembro");
									$diasdasemana = array (	1 => "Segunda-Feira",
															2 => "Terça-Feira",
															3 => "Quarta-Feira",
															4 => "Quinta-Feira",
															5 => "Sexta-Feira",
															6 => "Sábado",
															0 => "Domingo");
									$hoje = getdate();
									$dia = $hoje["mday"];
									$mes = $hoje["mon"];
									$nomemes = $meses[$mes];
									$ano = $hoje["year"];
									$diadasemana = $hoje["wday"];
									$nomediadasemana = $diasdasemana[$diadasemana];
									echo "$nomediadasemana, $dia de $nomemes de $ano";
								?>
								<div id="time" font face="Tahoma" size="6px" color="f00" float="left"></div>
								<script>
									function checkTime(i) {
										if (i < 10) {
											i = "0" + i;
										}
										return i;
									}

									function startTime() {
										var today = new Date();
										var h = today.getHours();
										var m = today.getMinutes();
										var s = today.getSeconds();
										// add a zero in front of numbers<10
										m = checkTime(m);
										s = checkTime(s);
										document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
										t = setTimeout(function () {
											startTime()
										}, 500);
									}
									startTime();
								</script>
					</td>
				</tr>
			</table>

		</form>
		<?php include_once("rodape.php");?>
		



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
			
			$result = mysqli_query($con, $sql);	
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
							
						} else  if($painel == 'aluno'){
							echo "<script language='javascript'> window.location='aluno';</script>";	
						}else  if($painel == 'professor'){
							echo "<script language='javascript'> window.location='professor';</script>";
						}else  if($painel == 'secretaria'){
							echo "<script language='javascript'> window.location='sga';</script>";
						
						}
						
						
						
					}
					
				}
				
				} else{
				echo "<h2> Erro Fatal - Tente Novamente  </h2>";echo "<script language='javascript'> window.alert('Dados Incorretos - Usuario ou Senha Invalido!');</script>";			
			}
		}
}

?>

	</div>
</body>

</html>