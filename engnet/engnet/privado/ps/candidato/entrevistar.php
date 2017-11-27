<?php

	include "../../funcoes/funcoes.php";
	include "../../include/requisition.php";

	if (isset($_POST["tFinalizar"])) {
		$candidato      = $_POST["tCandidato"];
		$can = selecionarObjetoPorId("candidatos", $candidato);
		if ($can["entrevista"] == 1) {
			header("Location: listar-candidato.php?erro=2");
		}else{
			$entrevistador  = $_POST["tEntrevistadores"];
			$curriculo      = $_POST["tCurriculo"];
			$perguntaUm     = $_POST["tPerguntaUm"];
			$perguntaDois   = $_POST["tPerguntaDois"];
			$perguntaTres   = $_POST["tPerguntaTres"];
			$perguntaQuatro = $_POST["tPerguntaQuatro"];
			$perguntaCinco  = $_POST["tPerguntaCinco"];
			$perguntaSeis   = $_POST["tPerguntaSeis"];
			$perguntaSete   = $_POST["tPerguntaSete"];
			$perguntaOito   = $_POST["tPerguntaOito"];
			$perguntaNove   = $_POST["tPerguntaNove"];
			$perguntaDez    = $_POST["tPerguntaDez"];
			
			if(inserirEntrevista($candidato, $entrevistador, $curriculo, $perguntaUm, $perguntaDois, $perguntaTres, $perguntaQuatro, $perguntaCinco, $perguntaSeis, $perguntaSete, $perguntaOito, $perguntaNove, $perguntaDez)){
				updateEntrevista($candidato);
				header("Location: can.php?idCan=".$candidato."&sucesso=1");
			}else{
				header("Location: listar-candidato.php?erro=1");
			}
		}

	}
?>
