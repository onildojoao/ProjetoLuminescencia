<?php 

//Include para conexão com o banco.
include "../../utilidades/conexao/conexao.php";

//Inicia a Sessão
session_start();

//Verifica se o usuário está logado
if ($_SESSION["usu_logado"] != "ok")
{
    echo "<script>alert('Usuário não está logado!');
            </script>";
    header ('Location: ../login/tela_login.php');
} 

if ($_POST != null) 
{
    if (isset($_POST['id_poste']))
    {
        $id_poste = $_POST['id_poste'];
    }

    // Buscando pelos postes existentes baseado o input
    $sql_buscaposte = "SELECT pp_id FROM pp_posteprincipal WHERE pp_id = '$id_poste'";

    $retorno_buscaposte = $conexao->query($sql_buscaposte);

    if ($retorno_buscaposte->num_rows > 0)
    {

        echo "<script>
        alert('Poste encontrado! Redirecionando para formulário de cadastro!');
        location.href='../formulario/tela_formulario_edit.php?id_poste=$id_poste';
        </script>";
        //header("Location: ");

    } else {

        echo "<script>
        alert('Poste não encontrado na base de dados! Você será redirecionando para formulário para cadastro do novo poste!');
        location.href='../formulario/tela_formulario.php?id_poste=$id_poste';
        </script>";
        //header("Location: ");
    }

}

?>

<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <div class="area-login txt-ao-centro form-group col-lg-3 col-md-6 col-sm-12 col-xs-12 ">

            <div class="texto chamada-home txt-ao-centro oxygen-regular">

                <p>Bem-Vindo ao sistema de Iluminância da Opus1 Engenharia</p>

            </div>

            <br>
            <br>

            <form method="POST" id="form">
                <div class="texto chamada-home txt-ao-centro oxygen-regular form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <label for="idPoste" style="width:300px" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">Informe o ID do Poste:</label>
                    <input type="number" class="form-control" id="idPoste" name="id_poste" required>
                    <br>
                    <button class="btn btn-success">Confirmar</button>
                </div>
            </form>
        </div>
    </body>
</html>