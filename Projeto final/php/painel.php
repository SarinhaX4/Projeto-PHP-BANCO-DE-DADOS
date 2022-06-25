<?php
    include("verifica_usuario.php");    
?>

<html>

    <head>
        <title>Painel</title>
        <meta charset="utf-8">
        <link rel="icon" href="../icons/book.png">
        <link rel="stylesheet" href="../css/esti_painel.css">
        <link rel="stylesheet" href="../css/esti_menu.css">
    </head>

    <body>
        <nav>
            <ul>
                <li> <img class="avatar" src=" <?php echo $row['foto'] ?> "> </li>
                <li> <a href="perfil.php">Perfil</a> </li>
                <li> <a href="nova_atividade.php">Nova atividade</a> </li>
                <li> <a href="listar_t.php">Lista de atividades</a> </li>
                <li id="btt_sair"> <a href="logout.php">Sair</a> </li>
            </ul>
        </nav>
        <header>
            <container>
                <div class="boxes">
                    <a href="nova_atividade.php">Nova tarefa</a>

                    <a href="listar_t.php">Lista de tarefas</a>
                </div>
            </container>
        </header>
    </body>

</html>