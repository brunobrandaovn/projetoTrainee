<?php
	include "../../funcoes/funcoes.php";
	include "../../include/requisition.php";

	if (isset($_POST["tAdicionar"])) {
		$nome       = $_POST["tName"];
		$peso       = $_POST["tPeso"];
		$descricao   = $_POST["tEditor"];
		
		echo $descricao;
		
		if(inserirDinamica($nome, $peso, $descricao)){
			header("Location: listar-dinamica.php?sucesso=1");
		}else{
			header("Location: listar-dinamica.php?sucesso=0");
		}
	}
?>
