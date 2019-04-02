<?php
include ("conexao.php");
 $Nome =$_POST["Nome"];
 $Email =$_POST["Email"];
 $Mensagem =$_POST["Mensagem"];
 $Interesse =$_POST["Interesse"];
 
 $sqlGravarFilme =mysql_query("insert into tbClient(Nome,Email,Mensagem,Interesse) value('$Nome','$Email','$Mensagem','$Interesse')") or die("Erro ao gravar registro.".mysql_error());
 echo "Your data has been sent successfully";
 ?>