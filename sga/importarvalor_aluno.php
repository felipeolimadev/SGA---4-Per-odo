<?php

	$conn = new mysqli("localhost", "root", "","sga");
	mysqli_set_charset($conn, "utf8");
	
	$arquivo				=$_FILES["file"]["tmp_name"];
	$nome					=$_FILES["file"]["name"];
	
	$ext = explode(".", $nome);
	
	
	$extensao = end($ext);
	
	
	if($extensao != "csv"){
		echo "Extensão Inválida";	
		
	}else{
		$objeto = fopen($arquivo, 'r');
		
			while(($dados = fgetcsv($objeto, 1000, ";")) !== FALSE)
				{
				$nome	 		 	= utf8_encode($dados[0]);
				$sigla			= utf8_encode($dados[1]);
								
				$result = $conn->query("INSERT INTO csvvalor (nome, sigla) VALUES('$nome', '$sigla')");
				}
		
				if($result){
					echo "Dados inseridos com sucesso";	
						
					}else{
						echo "Erro ao inserir os dados";
					}




}
?>