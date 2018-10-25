<?php
	$servidor = "localhost";
	$port     = "5432";
	$user     = "postgres";
	$senha    = "111111";
	$db       = "vendas";	
	$conexao  = pg_connect("host=".$servidor." port=".$port." dbname=".$db." user=".$user." password=".$senha);
	 
	if (!$conexao) {
	   die('Não foi possível abrir conexão com PGSQL');
	} 
?>