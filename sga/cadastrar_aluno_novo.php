<div class="container">
	<div class="form-signin" style="background: #1C1C1C;">
		<h2>Cadastro de Aluno</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
		<?php
			include"conexao.php";
			
			$sql = 'SELECT * FROM turma ORDER BY cod_turma';                
			$resultado = mysqli_query($con, $sql) ;                
			$linhas = mysqli_num_rows($resultado);  
			
			?>
		<form method="POST" action="processa_cad_aluno.php">
			<!--<label>NomeAluno</label>-->
			<i class="fas fa-user-circle"></i>  Aluno:<input type="text" name="nome" placeholder="Digite o nome  completo" class="form-control">
			<i class="fas fa-graduation-cap"></i> Matricula:<input type="text" name="matricula"  class="form-control" maxlength="8">
			<i class="fas fa-phone"></i>  Telefone:<input type="text" name="telefone" placeholder="ex.: 33 3333-3333" class="form-control" maxlength="10"><br>			
			Turma:
			<select name="cod_turma" class="form-control">
				<?php foreach($resultado as $dado) : ?>
				<option value="<?=$dado['cod_turma'] ?>"><?=$dado['cod_turma'] ?></option>
				<?php endforeach; ?>
			</select>
			<input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-success"><br>
		</form>
	</div>
</div>