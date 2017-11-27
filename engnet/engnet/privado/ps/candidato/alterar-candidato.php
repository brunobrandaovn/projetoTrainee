<?php
		include "../../include/requisition.php";
		include "../../funcoes/funcoes.php";

		if (isset($_POST['tAdicionar'])){
			$candidato  = $_POST['tCandidato'];
			$nome       = $_POST["tName"];
			$nascimento = $_POST["tNascimento"];
			$semestre   = $_POST["tSemestre"];
			$matricula  = $_POST["tMatricula"];
		    $email      = $_POST["tEmail"];
		    $telefone   = $_POST["tTelefone"];
		    $motivo     = $_POST["tMotivo"];
		    $palavra    = $_POST["tPalavra"];
		
			if(updateCandidato($nome, $nascimento, $semestre, $matricula, $email, $telefone, $motivo, $palavra, $candidato)){
				header("Location: adicionar-candidato.php?sucesso=1");
			}else{
				//header("Location: adicionar-candidato.php?sucesso=0");
			}
		}


?>