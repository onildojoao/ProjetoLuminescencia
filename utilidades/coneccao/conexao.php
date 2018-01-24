<?php

    //Configura a conexão com o banco de dados
	$conexao = new mysqli("localhost", "root", "", "opus");

	//$conexao->query("SET NAMES 'utf8'");
	//$conexao->query("SET CHARACTER SET utf8");  
	//$conexao->query("SET SESSION collation_connection = 'utf8_unicode_ci'"); 	

	//verifica se ocorreu conexao
	if($conexao->connect_errno == true){
		$msg_erro = $conexao->connect_error;
		echo "Erro de conexão: " .$msg_erro;
		exit;
	}

?>