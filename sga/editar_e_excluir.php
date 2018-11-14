<?php

    session_start() ;   
    
    $cod_aluno = $_POST['cod_aluno'];
    
    $_SESSION['cod_aluno'] = $cod_aluno;

    if (isset($_POST['editar']) || isset($_POST['excluir'])) {
        // handle textarea
    
        if (isset($_POST['editar'])) {
            header('Location: editar_alunos.php');
            exit();
        }
    
        header('Location: excluir_aluno.php');
        exit();
            }


    ?>