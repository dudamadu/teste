<?php
	echo "GET:" . var_dump($_GET) . "<br>";
	echo "POST:" . var_dump($_POST) . "<br>";
	echo "posicao nome" . $_POST['nome'];
	
	
	/*configuracao de enderecamento do banco de dados*/
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	
	/*configuracao de acesso do banco de dados*/
	$nome_banco = "bd_centro_interesse";
	
	$conexao = mysql_connect($servidor, $usuario, $senha);
	
	$banco = mysql_select_db($nome_banco, $conexao);
	
	/*verifica se a conexao realmente foi criada*/
	/*se (conexao) entao, ou seja, conexao e falsa*/
	if (!$conexao) {
		echo "nao foi possivel conectar ao banco MYSQL.";
		exit;
	}else{/*senao*/
		echo " conectou!";
	}
?>