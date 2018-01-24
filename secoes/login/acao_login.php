<? php 

    //Include para conexão com o banco.
	include "../utilidades/coneccao/conexao.php";

    //Inicia a Sessão
    session_start();

    $usu_cpf = $_POST['usu_cpf'];
    $usu_senha = $_POST['usu_senha'];

    //Verifica se usuário e senha estão vazios
    if ((!$usu_cpf) || (!$usu_senha))
    {
        echo "<script>alert('Nome do Usuário ou Senha estão vazios! Por favor, insira os seus dados e tente novamente!'); location.href='tela_login.php';</script>";
    } else {
        
        $sql_login = "SELECT * FROM funcionario WHERE usu_CPF = '$usu_cpf' AND usu_Senha = '$usu_senha'";

		$retorno_login = $conexao->query($sql_login);

		if($retorno_login->num_rows != 0){

			//Coleta as informações encontradas do usuário
			while( $registro_login = $retorno2->fetch_array() ){

				$_SESSION['usu_id']      = $registro_login["usu_id"];
				$_SESSION['usu_nome']           = $registro_login["usu_Nome"];;
                $_SESSION['usu_email']              = $registro_login["usu_Email"];	
				$_SESSION['usu_cpf']          = $registro_login["usu_CPF"];
				$_SESSION['usu_senha']              = $registro_login["usu_Senha"];	

			}
            
            // header ao invés de echo por conta do session
			header("Location: ../formulario/tela_formulario.php");


		} else {

			echo "<script>alert('Usuário ou Senha não encontrados! Verifique os dados inseridos!'); location.href='tela_login.php'; </script>";

		}
    }

?>