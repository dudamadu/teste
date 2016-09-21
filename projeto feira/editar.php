<! DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<link href="estilo.css" rel="stylesheet">
<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<title>..:: Editar o CI ::..</title>


<!--  Nucleo do jquery -->
<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

	                                                                          
	<?php
	// Corrige a acentuacao
	mysql_query ( "SET NAMES 'utf8'" );
	mysql_query ( 'SET character_set_connection=utf8' );
	mysql_query ( 'SET character_set_client=utf8' );
	mysql_query ( 'SET character_set_results=utf8' );
	
		include 'includes/conexao.php';
		
		$codigo = $_GET['id'];
		
		$sql = mysql_query("SELECT * FROM tb_centro_interesse WHERE id_centro_interesse =  '".$codigo."' ");
		
		$resultado = mysql_fetch_array($sql);
		
		
		$codigocentro = $resultado['id_centro_interesse'];
		$nome = $resultado['nome'];
		$descricao = $resultado['descricao'];
		$horario_inicio = $resultado['horario_inicio'];
		$horario_termino =$resultado['horario_termino'];
		$orientador = $resultado['orientador'];
		$quantidade_vagas = $resultado['quantidade_vagas'];
		
		
	?>
	<body>
	<meta charset="utf-8"></meta>
<div id="container" class="container">

	<img class="img-responsive centralizada"src="C:/xampp/htdocs/Isabella(projeto)/wbs.jpg" width="150" height="90" />
	
	<header class="centralizado">
	<h1> Editar Centro </h1>
	</header>
	
	<form id="form1" name="form1" method="post" action="atualizar_centro.php">
	
		<div class="form-group">
			<span class="glyphicon glyphicon-user"></span>
				<label for="txt_codigo">Nome:</label>
				<!-- a tag input representa uma entrada de dados do usuario, � necess�rio informar o tipo desta entrada de dados. -->
				<input type="text"
					class="form-control" id="txt_name" name="nome" value="<?php echo $nome; ?>"/>
		</div>
			<div class="form-group">
			<span class="glyphicon glyphicon-edit"></span>
				<label for="txt_codigo">Descrição:</label>
				<!-- a tag input representa uma entrada de dados do usuario, � necess�rio informar o tipo desta entrada de dados. -->
				<input type="text"
					class="form-control" id="txt_name" name="nome" value="<?php echo $descricao; ?>"/>
		<div class="form-group">
					<label for="txt_codigo">horário de início:</label>
					<input type="time"
				class="form-control" id="txt_name" name="nome" value="<?php echo $horario_inicio; ?>"/>
				
				</div>
		<div class="form-group">
					<label for="txt_codigo">horário de termino:</label>
					<input tipo="time"
				class="form-control" id="txt_name" name="nome" value="<?php echo $horario_termino; ?>"/>
				
				</div>
						
				<div class="form-group">
				<span class="glyphicon glyphicon-pencil"></span>
					<label for="txt_codigo">Orientador:</label>
					<!-- a tag input representa uma entrada de dados do usuario, � necessário informar o tipo desta entrada de dados. -->
					<input type="text"
						class="form-control" id="txt_name" name="nome" value="<?php echo $orientador; ?>"/>
				</div>		
				
			</div>
				<div class="form-group">
				<label for="txt_codigo">Quantidade de vagas:</label>
					<input tipo="number"
					class="form-control" id="txt_name" name="nome" value="<?php echo $quantidade_vagas; ?>"/>
				</div>		
		<input type="submit" name="submit" value="Salvar"></td>
</tr>
</table>
</form>
</html>
