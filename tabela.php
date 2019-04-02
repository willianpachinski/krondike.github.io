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
	$sqlRegistros =mysql_query("select * from dbLocadora");
	$num_linhas = mysql_num_rows($sqlRegistros);
	//-----------------------Inicio_da_tabela---------------//
	echo "<table border='1'>";
	//-----------------------Linhas_de_cabeçalho_da_tabela---------------//
	echo "<tr><th>Código</th><th>Título</th><th>Duração</th><th>Valor da Locação</th><th>Cod.Categoria</th></tr>";
	//-----------------------Linhas_de_cabeçalho_da_tabela---------------//
	for($i;$i<$num_linhas;$i++){
		$dados = mysql_fetch_array($sqlRegistros);

		$idFilme = $dados["idFilme"];
		$tituloFilme = $dados["tituloFilme"];
		$duracaoFilme = $dados["duracaoFilme"];
		$valorLocacao = $dados["valorLocacao"];
		$idCategoria = $dados["idCategoria"];
//-------------------linhas da tabela condetando os registros----------------//
        echo"
        <tr>
        <td> $idFilme</td>
        <td> $tituloFilme</td>
        <td> $duracaoFilme</td>
        <td> $valorLocacao</td>
        <td> $idCategoria</td>
        </tr>";
        //--------------------------------------//
    }
    echo"</table>"; //fim da tabela
    ?>
    </body>
</html>
			
			

