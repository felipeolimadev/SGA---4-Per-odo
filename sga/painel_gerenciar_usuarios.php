<div class="jumbotron">
      	 <section class="sombra">     
        <hr><CENTER><h3><strong> <i class="fas fa-users-cog"></i> Gerenciar Usuários</strong> </h3></CENTER>        
      </section>         
				<a class="navbar-brand">  
		<a class="navbar-brand"></a>

        </div>

        <br><br>
<!--<?php
  		//include_once("menu_admin.php");
      //$sql = 'SELECT * FROM login ORDER BY "id"';
    //  $resultado=mysqli_query($con, $sql);
    //  $linhas=mysqli_num_rows($resultado);     

  	?>   --> 
    <div class="container theme-showcase" role="main">
   

      <div class="page-header">
        <h1>Lista de Usuarios</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Status</th>
                <th>Code</th>
                <th>Nome</th>
                <th>Painel</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody><?php
              	
                $servidor = 'localhost';
                $bd       = 'sga';
                $usuario  = 'root';
                $senha    = 'root';
                $con = mysqli_connect($servidor, $usuario, $senha, $bd);

                $sql = 'SELECT * FROM login ORDER BY id';
                $resultado = mysqli_query($con, $sql) ;
                $linhas = mysqli_num_rows($resultado);  

                  ?>
                <tbody>
                    <?php foreach($resultado as $dado) : ?>
                    <tr>
                        <td>
                            <?=$dado['id']?>
                        </td>
                        <td>
                            <?=$dado['status']?>
                        </td>
                        <td>
                            <?=$dado['code']?>
                        </td>
                        <td>
                            <?=$dado['nome']?>
                        </td>
                        <td>
                            <?=$dado['painel']?>
                        </td>
                        
                    </tr>
                    <?php endforeach; ?>            
            </tbody>
          </table>
        
        </div>
      </div>

      

