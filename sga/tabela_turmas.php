<div class="container theme-showcase" role="main">


    <div class="page-header">
        <h1>Turmas Cadastradas </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Letra</th>
                        <th>Período</th>
                        <th>Curso</th>
                        <th>Ano</th>
                        <th>Semestre</th>
                        <th>Alunos</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
          include"../conexao.php";

        $sql = 'SELECT * FROM turma ORDER BY cod_turma';                
        $resultado = mysqli_query($con, $sql) ;                
        $linhas = mysqli_num_rows($resultado);  

          ?>
                <tbody>
                    <?php foreach($resultado as $dado) : ?>
                    <tr class="active">
                        <td>
                            <?=$dado['cod_turma']?>                            
                        </td>
                        
                        <td>
                            <?=$dado['letra']?>
                        </td>
                        <td>
                            <?=$dado['periodo'].'º Período'?>
                        </td>
                        <td>
                            <?=$dado['cod_curso']?>
                        </td>
                        <td>
                            <?=$dado['ano']?>
                        </td>
                        <td>
                            <?=$dado['semestre']. 'º Semestre'?>
                        </td>
                        <td>
                            
                        </td>
                        <td>
                        <form method="POST" action="excluir_turma.php">
                                <input type="checkbox" name="cod_turma" value="<?=$dado['cod_turma']?>">Excluir<br>
                                <input type="submit" value="Confirmar">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
        </div>
    </div>
</div>