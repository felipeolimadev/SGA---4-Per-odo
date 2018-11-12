<div class="page-header">
          <h1>Cursos Cadastrados</h1>
        </div>
<?php
    include "conexao.php";
    $sql_curso = 'SELECT * FROM curso ORDER BY cod_curso';
    $resultado_curso = mysqli_query($con, $sql_curso) ;
    $contador = 1;

?>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Código do Curso</th>
      <th scope="col">Nome</th>      
      <th scope="col">Sigla</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($resultado_curso as $dado_curso) : ?>
    <tr>
        <td><?=$dado_curso['cod_curso']?></td>
        <td><?=$dado_curso['nome']?></td>      
        <td><?=$dado_curso['sigla']?></td>
    </tr>
    
    <?php endforeach; ?>    
  </tbody>
</table>