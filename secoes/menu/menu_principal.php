<?php 
session_start();
//Verifica se o usuário está logado
if ($_SESSION["usu_logado"] != "ok")
{
    echo "<script>alert('Usuário não está logado!');
            </script>";
    header ('Location: ../login/tela_login.php');
} 
?>

<html>
    <head>

        <meta charset="UTF-8">

        <title>Sistema de Controle de Luminescência - Menu</title>

        <link rel="stylesheet" type="text/css" href="../../includes/css/bootstrap.min.css">

        <link rel="stylesheet" href="../../includes/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../../includes/css/style.css">
        
        <script src="../../includes/js/jquery-3.2.1.min.js"></script>
        <script> 
        $(function(){
            $("#navbar").load("../navbar.html"); 
        });
    </script>

    </head>
    <body>
        
        <div id="navbar"></div>
        
        <!--
        <button type="submit" class="btn btn-secondary logout" onclick="location.href='../login/acao_logout.php'">Logout</button>
        -->
        <div class="area-login txt-ao-centro">

            <div class="texto chamada-home txt-ao-centro oxygen-regular">

                <p>Bem-Vindo ao sistema de iluminância da Opus1 Engenharia</p>

            </div>



        </div>
    </body>
</html>