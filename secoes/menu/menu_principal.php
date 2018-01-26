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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       

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