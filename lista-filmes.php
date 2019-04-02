<?php
include("conexao.php");
if(isset($_GET["pesquisa"])){
	$pesquisa = $_GET["pesquisa"];
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de gerenciamento de Clientes</title>
</head>
<body>
	<h1>KRONKDIKE</h1>

<?php
include("menu.php");
?>

<form name="pesquisa" action="lista-filmes.php" method="get">
	<label>Pesquisa de Clientes:</label><input type="text" name="pesquisa">
	<input type="submit" value="Pesquisar">
</form>

<h3>Lista de Clientes</h3>
<table border="1">
	<tr>
		<th>Código</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Mensagem</th>
		<th>Interesse</th>
		<th>Excluir | Editar</th>
	</tr>

<?php
$sqlRegistros = mysql_query("select idPessoa, Nome,Email, Mensagem, Interesse, nomeInteresse from tbClient inner join tbInformacoes on tbClient.idCategoria = tbInformacoes.idCategoria where Nome like '%$pesquisa%' order by idPessoa");
$num_linhas = mysql_num_rows($sqlRegistros);
mysql_query($sql_select_all) or die(mysql_error())

for ($i;$i<$num_linhas;$i++){
	$dados =mysql_fetch_array($sqlRegistros);
	$idPessoa = $dados["idPessoa"];
	$Nome = $dados["Nome"];
	$Email = $dados["Email"];
	$Mensagem = $dados["Mensagem"];
	$nomeInteresse = $dados["nomeInteresse"];
	
?>

	
	<tr>
		<td><?php echo $idPessoa;?></td>
		<td><?php echo $Nome;?></td>
		<td><?php echo $Email;?></td>
		<td><?php echo $Mensagem;?></td>
		<td><?php echo $nomeInteresse;?></td>
	<td>
		<a href="excluir-filme.php?idPessoa=<?php echo$idPessoa;?>">Exluir</a> -
		<a href="editar-filme.php?idPessoa=<?php echo$idPessoa;?>">Editar</a>
	</td>
	</tr>
	<?php  
}
	?>
</body>
</html>