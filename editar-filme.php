<?php
include("conexao.php");
$idFilme = $_GET["idPessoa"];
$sqlRegistros = mysql_query("select Nome, Email, Mensagem, tbClient.Interesse, nomeInteresse from tbClient inner join tbInformacoes on tbClient.Interesse = tbInformacoes.Interesse where idPessoa=$idPessoa") or die("Query execution error".mysql_error());

$dados = mysql_fetch_array($sqlRegistros);

$Nome = $dados["Nome"];
$Email = $dados["Email"];
$Mensagem = $dados["Mensagem"];
$Interesse = $dados["Interesse"];
$nomeInteresse = $dados["nomeInteresse"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Gerecia Registro</title>
</head>

<body>
<h1>KRONDIKE</h1>
<?php
include("menu.php");
?>
<form name="form1" action="atualizar-filme.php?" method="post">
<input type="hidden" name="idPessoa" value="<?php echo $idPessoa; ?>">
<p>
<label>Titulo:</label>
<input type="text" name="Nome" value="<?php echo $Nome; ?>">
</p>
<p>
<label>Duração:</label>
<input type="text" name="Email" value="<?php echo $Email; ?>">
</p><p>
<label>Valor: R$</label>
<input type="text" name="Mensagem" value="<?php echo $Mensagem; ?>">
</p><p>
<label>Categoria:</label>
<select name="Interesse">
	<option value='<?php echo $Interesse; ?>'><?php echo $nomeInteresse;?></option>
	
<?php
$rsCategoria = mysql_query("select * from tbInformacoes");
$linhas = mysql_num_rows($rsCategoria);
for($i=0; $i<$linhas; $i++){
	$dados = mysql_fetch_array($rsCategoria);
	$idCategoria = $dados["idCategoria"];
	$nomeInteresse = $dados["nomeInteresse"];
	echo "<option value = '$idCategoria'>$nomeInteresse</option>";
}
?>
</select>
</p>
<p>
	<input type="submit" name="opcao" value="Atualizar">
</p>	
</form>
</body>
</html>