<?php
session_start();

?>
<style>
    article {
        padding: 2%;
        display: flex;
        /*<background-color: red;*/
    }

    section {
        padding: 50px;
        border: 1px solid #000;
        border-radius: 50px;
        background-color: #eee;
        margin-bottom: 50px;
        /* background-color: purple;*/
        /*color: yellow;*/

    }

    * {
        margin: 0 auto;
        padding: 0;
        box-sizing: border-box;
    }

    #menu-h {
        list-style: none;
        padding-top: 50px;
        background-color: #99BCBD;
        text-align: center;
        height: 100px;
        font-family: arial, sans-serif;
        border-bottom: solid 4px #4E9094;
    }

    #titulo {
        margin-left: 10px;
        text-align: left;
        font-weight: bold;
    }

    #menu-h li {
        display: inline;
        background-color: #326950;
        margin: 9px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
        border-radius: 4px;
    }

    #menu-h li a {

        color: #FFF;
        padding: 20px;
        display: inline-block;
        text-decoration: none;
        display: inline;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="estilo.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <header>
        <nav>
            <div class="menu-h">
                <ul>
                    <h1>Cabeçalho do Site</h1>
                    <li><a href="index.php"> HOME </a></li>
                    <li><a href="famosos.php"> RELATOS </a></li>
                    <li><a href="faleconosco.php"> FALE CONOSCO </a></li>
                    <li><a href="empresas.php"> EMPRESAS </a></li>
                    <li><a href="faleconosco.php"> Cadastro </a></li>
                    <li><a href="login.php"> Login </a></li>
                </ul>
            </div>
            
        </nav>
    </header>

    <div class="conteudo">
        <h2> What is Lorem Ipsum?</h2>
        <br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.</id>
        </p>
    </div>

</body>

</html>