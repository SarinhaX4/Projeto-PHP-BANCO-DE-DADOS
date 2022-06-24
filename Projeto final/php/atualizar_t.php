<?php

    include("conexao.php");

    $id_tarefa = $_GET['id_t'];
    $tarefa_t = $_POST['i_tarefa'];
    $tipo_t = $_POST['i_tipo'];
    $status_t = $_POST['i_status'];
    $descricao_t = $_POST['i_descricao'];

    $query_1 = "update tarefa set titulo = '{$tarefa_t}',status_tarefa = '{$status_t}' where id_tarefa = '{$id_tarefa}', descricao = '{$descricao_t}'";
    
    if(mysqli_query($conexao, $query_1)){
        header('Location: listar_t.php');
    }else{
        ?>
        <h1> Erro na atualização do registro! </h1>
        <a href="listar_t.php">Voltar</a>
        <?php
    }

?>