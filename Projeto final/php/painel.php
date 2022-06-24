<?php
    include("verifica_usuario.php");    
?>

<html>

    <head>
        <title>Painel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/es_navbar.css">
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
    </body>

</html>