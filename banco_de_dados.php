<?php
//--------------------DADOS_PARA_A_CONEXÃO-----------------//
 
 $servidor ="mysql07-farm70.uni5.net";

 //------------------ENDEREÇO_DO_SERVIDOR----------------//

 $usuario ="148604";



 $senha ="teste12345";



 $banco ="148604";


 $conexao = mysql_connect($servidor,$usuario,$senha) or die
 ("Não foi possível conectar-se ão servidor. Erro: ".mysql_error());

 //------------------Executa_a_conexão_com_o_servidor----------------//

 $selecao =mysql_select_db($banco) or die
 ("Não foi possivel se conectar-se ão banco de dados. Erro:".mysql_error());

 //------------------Seleciona_o_Banco_de_dados----------------//


 /*VEREFICA SE HOUVE CONEXÃO COM O BANCO DE DADOS NO SERVIDOR*/

 if(isset($selecao)){
 	echo "Banco de dados selecionado com sucesso.";
 }

 ?>