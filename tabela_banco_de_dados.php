<?php
include("banco_de_dados.php");
//------------------------Inclusão_do_arquivo_de_conexão_com_o_servidor_e_seleção----------------//
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Lista de Filme -Locadora WP</title>
</head>
<body>
<h1>Lista de Filmes</h1>
<?php
	$sqlRegistros =mysql_query("select * from tbClient");
	$num_linhas = mysql_num_rows($sqlRegistros);
	//-----------------------Inicio_da_tabela---------------//
	echo "<table border='1'>";
	//-----------------------Linhas_de_cabeçalho_da_tabela---------------//
	echo "<tr><th>Id</th><th>Nome</th><th>Email</th><th>Mensagem</th><th>Interesse</th></tr>";
	//-----------------------Linhas_de_cabeçalho_da_tabela---------------//
	for($i;$i<$nun_linhas;$i++){
		$dados = mysql_fetch_array($sqlRegistros);

		$idPessoa = $dados["idPessoa"];
		$Nome = $dados["Nome"];
		$Email = $dados["Email"];
		$Mensagem = $dados["Mensagem"];
		$Interesse = $dados["Interesse"];
//-------------------
			
			}
</body>
</html>