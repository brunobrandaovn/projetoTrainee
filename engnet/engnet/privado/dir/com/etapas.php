<?php

	require_once('../../../db.class.php');

	$projeto = $_POST['projeto'];
	$estado =  $_POST['estado'];
	$comentarios = $_POST['comentarios'];
	$alterar= $_POST['alterar'];

	$sql = "INSERT INTO etapas('projeto', 'estado', 'comentarios', 'alterar') VALUES ('.$projeto.', '.$estado.', '.$comentarios.', '.$alterar.',)";

	mysqli_query($con,$sql);

	if($sql){
		echo "A insercao deu certo.";
		echo "<br/>";
	}else{
		echo "A insercao NAO funcionou.";
		echo "<br/>";
	}

?>
