<?php $painel_atual="gestao" ;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SGO::Gestão Administrativa - UNIPAC Teófilo Otoni</title>
<?php
require "../config.php";

?>
</head>

<body>
	<div><h1><strong>Você Esá Lotado em:: <?php echo$_SESSION['painel']?><br>
	<strong>Bem-Vindo(a):: <?php echo$_SESSION['nome'] ?><br>
	</strong><a href="../index.php?acao=quebra"><strong>Logout</strong></a></h1></div>
	
</body>
</html>