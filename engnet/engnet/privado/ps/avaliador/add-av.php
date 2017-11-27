<?php
	include "../../funcoes/funcoes.php";
	include "../../include/requisition.php";

	if (isset($_GET["id"]) && isset($_GET["idPs"])) {
		$id_av = $_GET["id"];
		$id_ps = $_GET["idPs"];
		
		if(inserirAvaliador($id_av, $id_ps)){
			header("Location: adicionar-avaliador.php?id=".$id_ps."&sucesso=1");
		}else{
			header("Location: adicionar-avaliador.php?id=".$id_ps."&sucesso=0");
		}
	}
?>
