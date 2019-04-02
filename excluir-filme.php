<?php
include ("conexao.php");
$idFilme = $_GET["idPessoa"];
$sqlDeleta = mysql_query("delete from tbClient where idPessoa = $idPessoa") or die ("Err delet Client.".mysql_error());
echo "Your data has been sent successfully";;
