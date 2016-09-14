<?php

include 'includes/conexao.php';


$id = $_GET['id']; // Recebendo o valor enviado pelo link

$sql = mysql_query("DELETE FROM tb_centro_interesse WHERE id_centro_interesse='".$id."'"); // A instrução delete irá apagar todos os dados da id recebida


if ($sql) {
	echo "Registro excluído com sucesso";
	echo "<a href='listar_centro.php'> Clique aqui para voltar</a>";
}

mysql_close($conexao);
?>