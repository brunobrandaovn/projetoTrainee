<?php
	
	header('Content-Type: text/html; charset=utf-8');
	try{
		$conexao = new PDO('mysql:host=localhost;dbname=engne598_db', 'root', '');
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexao->exec("SET CHARACTER SET utf8");
	} 

	catch(PDOException $e){
	    echo 'ERROR: '.$e->getMessage();
	}
?>