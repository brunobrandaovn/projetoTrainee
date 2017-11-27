<?php
	include "../../funcoes/funcoes.php";
	include "../../include/requisition.php";

	if (isset($_POST["tAdicionar"])) {
		$nome       = $_POST["tName"];
		$peso       = $_POST["tPeso"];
		$notaZero   = $_POST["tNotaZero"];
		$notaUm     = $_POST["tNotaUm"];
		$notaDois   = $_POST["tNotaDois"];
		$notaTres   = $_POST["tNotaTres"];
		$notaQuatro = $_POST["tNotaQuatro"];
		$notaCinco  = $_POST["tNotaCinco"];

		
		if(inserirCompetencia($nome, $peso, $notaZero, $notaUm, $notaDois, $notaTres, $notaQuatro, $notaCinco)){
			header("Location: adicionar-competencia.php?sucesso=1");
		}else{
			header("Location: adicionar-competencia.php?sucesso=0");
		}
	}
?>
