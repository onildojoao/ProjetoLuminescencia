<? php 

    //Include para conexão com o banco.
    //include "../../utilidades/coneccao/conexao.php";

    //Configura a conexão com o banco de dados
    $conexao = new mysqli("localhost", "root", "", "opus");

//verifica se ocorreu conexao
if($conexao->connect_error == true){
    $msg_erro = $conexao->connect_error;
    echo "Erro de conexão: " .$msg_erro;
    exit;
}
//Inicia a Sessão
//session_start();

if (isset($_POST['usu_cpf']))
{
    $usu_cpf = $_POST["usu_cpf"];
}
if (isset($_POST['usu_senha']))
{
    $usu_senha = $_POST["usu_senha"];
}
//Verifica se usuário e senha estão vazios
if ((!$usu_cpf) || (!$usu_senha))
{
    echo "<script>alert('Nome do Usuário ou Senha estão vazios! Por favor, insira os seus dados e tente novamente!');</script>";
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
            $_SESSION['usu_nome']           = $registro_login["usu_Nome"];
            $_SESSION['usu_email']              = $registro_login["usu_Email"];	
            $_SESSION['usu_cpf']          = $registro_login["usu_CPF"];
            $_SESSION['usu_senha']              = $registro_login["usu_Senha"];	
        }

        // header ao invés de echo por conta do session
        header("Location: ../formulario/tela_formulario.php");


    } else {

        echo "<script>alert('Usuário ou Senha não encontrados! Verifique os dados inseridos!'); </script>";

    }
?>