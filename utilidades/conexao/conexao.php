<?php

    //Configura a conexão com o banco de dados
	$conexao = new mysqli("localhost", "opus1", "magodgordo", "opus1");

	//verifica se ocorreu conexao
	if($conexao->connect_error == true){
		$msg_erro = $conexao->connect_error;
		echo "Erro de conexão: " .$msg_erro;
		exit;
	}

?>