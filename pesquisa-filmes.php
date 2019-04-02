<?php
 include("banco_de_dados.php");
 if (isset($_GET["pesquisa"])) {
 	$pesquisa= $_GET["pesquisa"];
 }else{
 	$pesquisa="";
 }
 ?>

 <!doctype html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Lista de Filmes - LocadoraWP</title>
 </head>
 
 <body>
 	<h1>Pesquisa de Filmes</h1>
 	<form name="pesquisa" action="pesquisa-filmes.php" method="get">
 <label>Pesquisa de Filmes:</label><input type="text" name="pesquisa">
 <input type="submit" value="Pesquisar">
</form>

<h2>Resultados</h2>

<?php
$sqlRegistros = mysql_query("select tituloFilme, nomeCategoria from dbLocadora inner join tbCategorias
	on dbLocadora.idCategoria where tituloFilme like '%$pesquisa%'");
 
 $num_linhas = mysql_num_rows($sqlRegistros);
 echo "<table border='1'>";
 echo "<tr><th>Título do Filme</th><th>Categoria</th></tr>";
 for ($i; $i<$num_linhas; $i++){

 	$dados = mysql_fetch_array($sqlRegistros);

 	$tituloFilme = $dados["tituloFilme"];
 	$nomeCategoria = $dados["nomeCategoria"];

 	echo "<tr><td>$tituloFilme</td><td>$nomeCategoria</tr>";
}

	echo "</table>"
	?>
</body>
</html>


