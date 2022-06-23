<?php

    include("conexao.php");

    $id_tarefa = $_GET['id_t'];
    $titulo_t = $_POST['i_titulo'];
    $descricao_t = $_POST['i_descricao'];
    $status_t = $_POST['i_status'];

    $query_1 = "update tarefa set titulo = '{$titulo_t}', descricao = '{$descricao_t}', 
                status_tarefa = '{$status_t}' where id_tarefa = '{$id_tarefa}'";
    
    if(mysqli_query($conexao, $query_1)){
        header('Location: listar_t.php');
    }else{
        ?>
        <h1> Erro na atualização do registro! </h1>
        <a href="listar_t.php">Voltar</a>
        <?php
    }

?>