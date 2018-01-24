
<?php 

//Include para conexão com o banco.
include "../../utilidades/coneccao/conexao.php";

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
            }

            // header ao invés de echo por conta do session
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

        <link rel="stylesheet" type="text/css" href="../../includes/css/bootstrap.min.css">

        <link rel="stylesheet" href="../../includes/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../../includes/css/style.css">

    </head>

    <div class="area-login txt-ao-centro">

        <div class="texto chamada-home txt-ao-centro oxygen-regular">

            <p>Digite seu CPF e Senha abaixo:</p>

        </div>

        <div class="login">

            <form method="post" class="form center-block" >

                <input type="text" name="usu_cpf" class="form-control input-lg input-principal fonte-normal open-sans-light" placeholder="CPF" required>


                <input type="password" name="usu_senha" class="form-control input-lg input-principal fonte-normal open-sans-light" placeholder="Senha" required>


                <button class="btn btn-primary btn-acessar fonte-bold transition mukta-bold transition hover">Acessar</button>

            </form>

        </div>

    </div>

</html>