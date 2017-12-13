<?php

	require_once('../../../db.class.php');

	$nome = $_POST['nome'];
	$sobrenome =  $_POST['sobrenome'];
	$empresa = $_POST['empresa'];
	$projeto = $_POST['projeto'];
	$telefone = $_POST['telefone'];

	$sql = "INSERT INTO cliente('nome', 'sobrenome', 'empresa', 'id_projeto', 'telefone') VALUES ('.$nome.', '.$sobrenome.', '.$empresa.', '.$projeto.','.$telefone.')";

	mysqli_query($con,$sql);

	if($sql){
		echo "A insercao deu certo.";
		echo "<br/>";
	}else{
		echo "A insercao NAO funcionou.";
		echo "<br/>";
	}

?>
