<?php
    include("verifica_usuario.php");
?>

<html>

    <head>
        <title>Perfil</title>
        <meta charset="utf-8">
        <link rel="icon" href="../icons/book.png">
        <link rel="stylesheet" href="../css/esti_perfil.css">
    </head>

    <body>
        
        <div class="perfil_box">
            <div class="title_box">
                Informações do usuário
            </div>

            <div class="img_box">
                <img src=" <?php echo $row['foto'] ?> ">
            </div>

            <div class="info_box">
                <span>
                    <label>Usuário</label>
                    <?php echo $row['login'] ?>
                </span>
                
                <span>
                    <label>Nome</label>
                    <?php echo $row['nome'] ?>
                </span>
                
                <span>
                    <label>Sobrenome</label>
                    <?php echo $row['sobrenome'] ?>
                </span>

                <a href="painel.php">Voltar</a>
            </div>

        </div>

    </body>

</html>