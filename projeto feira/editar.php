<?php

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
<form id="form1" name="form1" method="post" action="atualizar_centro.php">
<table width="400" border="0" align="center">
<tr><td width="1">nome:</td>
<td width="400"><input name="nome" type="text" size="50" id="nome" maxlength="100" value="<?php echo $nome; ?>" /></td>
</tr>

<tr><td width="1">descricao:</td>
<td width="400"><input name="descricao" type="text" size="50" id="descricao" maxlength="100" value="<?php echo $descricao; ?>" /></td>
</tr>

<tr><td width="1">horario inicio:</td>
<td width="400"><input name="horario_inicio" type="text" size="50" id="horario_inicio" maxlength="100" value="<?php echo $horario_inicio; ?>" /></td>
</tr>

<tr><td width="1">horario termino:</td>
<td width="400"><input name="horario_termino" type="text" size="50" id="horario_termino" maxlength="100" value="<?php echo $horario_termino; ?>" /></td>
</tr>

<tr><td width="1">orientador:</td>
<td width="400"><input name="orientador" type="text" size="50" id="orientador" maxlength="100" value="<?php echo $orientador; ?>" /></td>
</tr>

<tr><td width="1">quantidade vagas:</td>
<td width="400"><input name="quantidade_vagas" type="text" size="50" id="quantidade_vagas" maxlength="100" value="<?php echo $quantidade_vagas; ?>" /></td>
</tr>

<input type="submit" name="submit" value="Salvar"></td>
</tr>
</table>
</form>



-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


<! DOCTYPE html>
<html lang="pt-br">

	<head>
		<link href="estilo.css" rel="stylesheet">
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet"/>
		<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		
		<title>..:: lista do CI ::..</title>
		
		
		<!--  Nucleo do jquery -->
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
		
	
	<body>
		<div id="container" class="container"> 
		
		
			<section class="container">
			
				<h1 id="admin">Listar Centro de Interesse</h1>
			<div class="table-responsive" id="conteudo">
					<form id="mainform" action="">
						<table width="100%" class="table-striped" id="product-table">
					
							<thead>
								<tr>
								
								<div class="form-group">
				
									<th>Nome</th>
									<th>Descricao</th>
									<th>Hora Inicio</th>
									<th>Hora Termino</th>
									<th>Orientador</th>
									<th>Quantidade Vagas</th>
									<th></th>
			
								</div>
								
								</tr>
							</thead>
							<tbody>
								<?php
									include 'includes/conexao.php';
								
									// Corrige a acentuacao
									mysql_query("SET NAMES 'utf8'");
									mysql_query('SET character_set_connection=utf8');
									mysql_query('SET character_set_client=utf8');
									mysql_query('SET character_set_results=utf8');
									
									$sql = mysql_query("SELECT * FROM tb_centro_interesse");
									while($resultado = mysql_fetch_array($sql)){
										$codigocentro = $resultado['id_centro_interesse'];
										$nome = $resultado['nome'];
										$descricao = $resultado['descricao'];
										$horario_inicio = $resultado['horario_inicio'];
										$horario_termino =$resultado['horario_termino'];
										$orientador = $resultado['orientador'];
										$quantidade_vagas = $resultado['quantidade_vagas'];
									
									
								
										echo "<tr>
												<td>".$nome."</td>
												<td>".$descricao."</td>
												<td>".$horario_inicio."</td>
												<td>".$horario_termino."</td>
												<td>".$orientador."</td>
												<td>".$quantidade_vagas."</td>
												<td>	
												<a href='editar_centro.php?id=".$codigocentro."' title='Editar' class='glyphicon glyphicon-edit options-edit'></a>
													<a href='deletar_centro.php?id=".$codigocentro."' id='link-delete' title='Deletar' class='glyphicon glyphicon-minus-sign options-delet' data-title='Exclus�o'></a>
												
												</td>
											  </tr>";
									}
								?>
							</tbody>
						</table>
					</form>
				</div>
			</section>
		</head>
			
		<!-- END: footer -->
		</div>
		<script src="jquery/jquery-1.12.3.min.js" type="text/java"></script>
		<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		
	</body>
</html>