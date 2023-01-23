<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link href="css/index.css" rel="stylesheet">
        <title>CRUD</title>
    </head>
    
    <body>
    <header>
        <nav>
            <ul id="menu-h">
                <!--<h1 id="titulo">Cabeçalho do Site</h1>-->
                <li><a href="index.php"> HOME </a></li>
                <li><a href="famosos.php"> RELATOS </a></li>
                <li><a href="faleconosco.php"> FALE CONOSCO </a></li>
                <li><a href="empresas.php"> EMPRESAS </a></li>
                <li><a href="faleconosco.php"> Cadastro </a></li>
                <li><a href="login.php"> Login </a></li>
            </ul>

        </nav>
    </header>
    <main>
    <article>

            <section>
                <div class="conteudo">
                    <form id="form1" method="post">

                        <h2>Entre em Contato</h2>
                        <br>
                        <div>
                            <label for="nome">Nome:</label>
                            <br>
                            <input type="texto" id="nome" name="nome_usuario">
                        </div>
                        <div>
                            <label for="email">E-mail:</label>
                            <br>
                            <input type="email" id="email" name="email_usuario">
                        </div>
                        <div>
                            <label for="texto">Texto:</label>
                            <br>
                            <textarea id="texto" name="texto_usuario"></textarea>
                        </div>

                        <br>
                        <div class="button">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
            </section>
        <section>
        <h1>Cadastrar</h1>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="config.php">
            <label>Nome: </label>
            <input type="text" name="nome">
            <br><br>
            <label>E-mail: </label>
            <input type="email" name="email">
            <br><br>
            <label>Senha: </label>
            <input type="password" name="senha">
            <br><br>
            <input type="submit" value="Cadastrar">
        </form>
        </section>
        </article> 
        </main>   
    </body>
</html>