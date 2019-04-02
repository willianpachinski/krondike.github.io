<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Filmes</title>
</head>
<body>
<h1>Vídeo locadora WP</h1>
<?php
include("menu.php");
?>

<h3>Cadastro de Filmes</h3>
<form name="cadFilmes" action="gravar-filme.php" method="post">
	<p><label>Título </label><input type="text" name="tituloFilme"></p>
	<p><label>Duração </label><input type="text" name="duracaoFilme"></p>
	<p><label>Valor </label><input type="text" name="valorLocacao"></p>
	<p><label>Categoria </label><select name="idCategoria">

<?php

//Carrega a Lista de Categorias

$rsCategoria = mysql_query("select * from tbCategorias");
$linhas = mysql_num_rows($rsCategoria);
for($i=0;$i<$linhas;$i++){
	$dados = mysql_fetch_array($rsCategoria);
	$idCategoria = $dados["idCategoria"];
	$nomeCategoria = $dados["nomeCategoria"];
	echo "<option value='$idCategoria'>$nomeCategoria</option>";
}
?>
</select>
</p>
<p><input type="submit" value="Gravar"></p>
</form>
</body>
</html>