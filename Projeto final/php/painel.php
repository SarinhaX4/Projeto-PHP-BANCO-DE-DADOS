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
                <li id="logo"> <a href="../index.php"><img src="../icons/book.png"/></a> </li>
                <li id="logo"><a href="../index.php"><h2>studies in order</h2></a> </li>
                <li> <img class="avatar" src=" <?php echo $row['foto'] ?> "> </li>
                <li id="perfil"> <a href="perfil.php">Perfil</a> </li>
                <li id="btt_sair"> <a href="logout.php">Sair</a> </li>
            </ul>
        </nav>
        <header>
            <container>
                <div class="box_1">
                   <img src="../icons/atividade-nv.png" href="nova_atividade.php"/><a href="nova_atividade.php">Nova atividade</a> 
                </div>
                <div class="box_2">
                    <img src="../icons/list.png" href="nova_atividade.php"/><a href="lista_t.php">Lista</a> 
                </div>
            </container>
        </header>
    </body>

</html>