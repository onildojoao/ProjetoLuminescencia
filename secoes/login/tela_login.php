
<?php 

//Include para conexão com o banco.
include "../../utilidades/conexao/conexao.php";

if ($_POST != null)
{
    //Inicia a Sessão
    session_start();

    if (isset($_POST['usu_cpf']))
    {
        $usu_cpf = $_POST['usu_cpf'];
    }
    if (isset($_POST['usu_senha']))
    {
        $usu_senha = $_POST['usu_senha'];
    }
    //Verifica se usuário e senha estão vazios
    if ((!$usu_cpf) || (!$usu_senha))
    {
        echo "<script>alert('Nome do Usuário ou Senha estão vazios! Por favor, insira os seus dados e tente novamente!'); location.href='tela_login.php'; </script>";
    } else {
        
        $sql_login = "SELECT * FROM usu_usuario WHERE usu_CPF = '$usu_cpf' AND usu_Senha = '$usu_senha'";

        $retorno_login = $conexao->query($sql_login);

        if ($retorno_login == false) 
        {
            echo $conexao->error;
        }

        if($retorno_login->num_rows != 0){

            //Coleta as informações encontradas do usuário
            while( $registro_login = $retorno_login->fetch_array() ){

                $_SESSION['usu_id']      = $registro_login["usu_id"];
                $_SESSION['usu_nome']    = $registro_login["usu_Nome"];
                $_SESSION['usu_email']   = $registro_login["usu_Email"];	
                $_SESSION['usu_cpf']     = $registro_login["usu_CPF"];
                $_SESSION['usu_senha']   = $registro_login["usu_Senha"];	
                $_SESSION['usu_perfil']  = $registro_login["usu_Perfil"];
                $_SESSION['usu_logado']  = "ok";
            }

            header("Location: ../menu/menu_principal.php");


        } else {

            echo "<script>alert('Usuário ou Senha não encontrados! Verifique os dados inseridos!'); location.href='tela_login.php';</script>";

        }
    }
}

?>

<html>
    <head>

        <meta charset="UTF-8">

        <title>Sistema de Controle de Luminescência - Login</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../../includes/css/style.css">

    </head>

    

        
<!--
        <div class="login">

            <form method="post" class="form center-block" >

                <input type="text" name="usu_cpf" class="form-control input-lg input-principal fonte-normal open-sans-light" placeholder="CPF" required>


                <input type="password" name="usu_senha" class="form-control input-lg input-principal fonte-normal open-sans-light" placeholder="Senha" required>


                <button class="btn btn-primary btn-acessar fonte-bold transition mukta-bold transition hover">Acessar</button>

            </form>

        </div>
-->
        <div class="outer">
        <div class="middle">
        <div class="inner">

   
        <div class="texto chamada-home txt-ao-centro oxygen-regular">

            <h2>Digite seu CPF e Senha abaixo:</h2>
            <hr>
        </div>    
   
        <div class="container">
        <form class="form-horizontal" role="form" method="POST">
            
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="text" name="usu_cpf" class="form-control"
                                   placeholder="CPF (só numeros)" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="password" name="usu_senha" class="form-control" id="password"
                                   placeholder="Senha" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>
    </div>
    

</html>