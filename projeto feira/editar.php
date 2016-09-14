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
   <form action="index.html" method="post" >
				<div class="row form-group">
					<div class="col-md-6">
						<label for="nome-do-aluno">Nome:</label>
						<input type="text" id="nome-do-aluno"  class="form-control"/> 
					</div>
				</div>	

   <div class="row form-group">
					<div class="col-md-6">
						<label for="descricao">Descricao:</label>
						<input type="text" id="descricao"  class="form-control"/> 
					</div>
				</div>
				
   <div class="row">
					<div class="form-group">
						<div class="col-md-2">
							<label for="horario-de-inicio">Horario de Inicio:</label>
							<input type="time" id="horario-de-inicio"  class="form-control"/> 
						</div>
						<div class="col-md-2">
							<label for="horario-de-termino">Horario de Termino:</label>
							<input type="time" id="horario-de-termino"  class="form-control"/> 
						</div>
					</div>
				</div>

   <div class="row form-group">
					<div class="col-md-6">
						<label for="orientador">Orientador:</label>
						<input type="text" id="orientador"  class="form-control"/> 
					</div>
				</div> 

   <div class="row form-group">
					<div class="col-md-2">
						<label for="vagas">Vagas:</label>
						<input type="text" id="vagas"  class="form-control"/> 
					</div>
				</div>

<button type="button" class="btn btn-success">
	  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Salvar
		</button>



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
													<a href='deletar_centro.php?id=".$codigocentro."' id='link-delete' title='Deletar' class='glyphicon glyphicon-minus-sign options-delet' data-title='Exclusão'></a>
												
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