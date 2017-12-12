<?php

	require_once('../../../db.class.php');

	$nome = $_POST['nome'];
	$sobrenome =  $_POST['sobrenome'];
	$empresa = $_POST['empresa'];
	$projeto = $_POST['projeto'];
	$telefone = $_POST['telefone'];

	echo $_POST['telefone'];
	echo "<br/>";

	
	$sql = $con->query("INSERT into cliente (nome, sobrenome, empresa, id_projeto, telefone) values ('$nome', '$sobrenome', '$empresa', '$projeto', '$telefone')");

	if($sql){
		echo "A insercao deu certo.";
		echo "<br/>";
	}else{
		echo "A insercao NAO funcionou.";
		echo "<br/>";
	}

?>