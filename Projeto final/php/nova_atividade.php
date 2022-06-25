<?php
    include("verifica_usuario.php");
?>

<html>
    <head>
        <title>Atividade</title>
        <meta charset="utf-8">
        <link rel="icon" href="../icons/book.png">
        <link rel="stylesheet" href="../css/esti_form.css">

    </head>
    <body>
        <form action="cad_tarefa.php" method="post">
                <div class="form_box">
    
                    <h1>Nova tarefa</h1>

                    <label>Tarefa:</label>
                    <input type="text" name="i_tarefa" id="i_tarefa" placeholder="Resumir página 15" required>
                    
                    <label>Tipo:</label>
                    <select name="i_tipo" id="i_tipo" required>
                        <option value=""></option>
                        <option value="R">Redação</option>
                        <option value="L">Livro</option>
                        <option value="Q">Questões</option>
                        <option value="O">Outros</option>

                </select>
                    </select>    

                    <label>Status:</label>
                    <select name="i_status" id="i_status"required>
                        <option value=""></option>
                        <option value="P">Pendente</option>
                        <option value="I">Iniciado</option>
                        <option value="C">Concluído</option>
                </select>

                    <label>Descrição:</label>
                    <textarea name="i_descricao" cols="30" rows="10" id="i_descricao"></textarea>

                    <button class="btt_form" id = "btt_f">Cadastrar</button>
                    
                    <a href="painel.php">Voltar</a>
            
                </div>
        </form>
    </body>
</html>