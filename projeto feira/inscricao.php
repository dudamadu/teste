<?php
	echo var_dump($_GET) . "GET <br>";
	echo var_dump($_POST) . "POST <br>";
	$nome = $_POST['nome'];
	$codigo=  $_POST['meucodigo'];
	$opcao1 = $_POST['opcao1'];
	$opcao2 = $_POST['opcao2'];
	
	
	/*configurco de enderecmento do bnco de ddos*/
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	
	/*configurco de cesso o bnco de ddos*/
	$nome_banco = "bd_centro_interesse";
	
	$conexao = mysql_connect($servidor, $usuario, $senha);
	
	/*verifica se a conexao realmente foi criada*/
	/*se (nao conexao) entao, ou seja, conexao e falsa*/
	if (!$conexao) {
		echo "Não foi possível connectar ao servidor";
		exit;
	}else{/*senao*/
		echo "<h1>Conectou!</h1>";
	}
	
	/*Selecione o banco de dados ou morra*/
	$banco = mysql_select_db($nome_banco, $conexao) or die ("Não foi possível conectar ao banco de dados");
	
	
	/*Encerra a conexao*/
	mysql_close();
?>
