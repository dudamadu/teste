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