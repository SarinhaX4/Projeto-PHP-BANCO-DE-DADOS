<?php

    session_start();
    include("conexao.php");
    
    if(isset($_SESSION['usuario'])){

        $fk_usuario = $_SESSION['usuario'];
        
        $tarefa_t = $_POST['i_tarefa'];
        $tipo_t = $_POST['i_tipo'];
        $status_t = $_POST['i_status'];
        $descricao_t = $_POST['i_descricao'];

        $query_1 = "insert into tarefa (fk_usuario, titulo, tipo, status_tarefa, descricao, data_cadastro)
                    values ('{$fk_usuario}', '{$tarefa_t}', '{$tipo_t}','{$status_t}','{$descricao_t}', NOW())";

        mysqli_query($conexao, $query_1);

    }else{
        header('Location: ../index.php');
    }

?>

<html>

    <head>
        <title>Cadastro concluído</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/esti_concluido.css">
    </head>

    <body>
        <div class="box">
            <h1>Cadastro de tarefa concluído!</h1>
            <a href="painel.php">Voltar</a>
        </div>
    </body>

</html>