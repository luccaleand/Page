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
    <link href="estilo2.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>

    <ul id="menu-h">
        <h1 id="titulo">Cabeçalho do Site</h1>
        <li><a href="index.php"> HOME </a></li>
        <li><a href="famosos.php"> RELATOS </a></li>
        <li><a href="faleconosco.php"> FALE CONOSCO </a></li>
        <li><a href="empresas.php"> EMPRESAS </a></li>
        <li><a href="faleconosco.php"> Cadastro </a></li>
        <li><a href="login.php"> Login </a></li>
    </ul>

    <div class="conteudo">
        <h2> FAMOSOS</h2>
        <br>
        <a href="../MasterOfPelé.mp4" target="_blank"> <img
                src="https://sportbuzz.uol.com.br/media/uploads/2022/12/internado-pele-recebe-atualizacao-em-seu-quadro-medico.jpg"
                a>
            <div class="texto">
                <h3>Pelé</h3>
                <br>
                <p>
                    Antes de seu falecimento, Pelé não estava respondendo mais ao tratamento quimioterápico que foi
                    submetido desde setembro de 2021, quando descobriu um tumor no cólon. Assim, o ex-jogador, de 82
                    anos,
                    estava passando por cuidados paliativos no hospital Albert Einstein, em São Paulo. Conforme a Folha
                    de
                    São Paulo, o rei do futebol teve sua quimioterapia suspensa e foi tratado com medidas que visavam
                    conforto, para aliviar a falta de ar e dor
                </p>
            </div>
</body>

</html>