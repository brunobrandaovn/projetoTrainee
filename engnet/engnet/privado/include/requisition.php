<?php
	ob_start();
	session_start();
	if(!isset($_SESSION['usuarioEngNet']) && (!isset($_SESSION['senhaEngNet']))){
	    header("Location: http://www.engnetconsultoria.com.br");exit;
	}
	try{
		$conexao = new PDO('mysql:host=localhost;dbname=engne598_db', 'root', '');
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexao->exec("SET CHARACTER SET utf8");
	} 

	catch(PDOException $e){
    	echo 'ERROR: '.$e->getMessage();
	}


	include "logout.php";


?>