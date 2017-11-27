<?php

	include "../../funcoes/funcoes.php";
	include "../../include/requisition.php";

	if (isset($_POST["tAdicionar"])) {
		$nome       = $_POST["tName"];
		$nascimento = $_POST["tNascimento"];
		$semestre   = $_POST["tSemestre"];
		$matricula  = $_POST["tMatricula"];
		$email      = $_POST["tEmail"];
		$telefone   = $_POST["tTelefone"];
		$motivo     = $_POST["tMotivo"];
		$palavra    = $_POST["tPalavra"];
		$ps         = $_POST["tPs"];
		$foto = "";

		if(inserirCandidato($nome, $nascimento, $semestre, $matricula, $email, $telefone, $motivo, $palavra, $ps, $foto)){
			header("Location: adicionar-candidato.php?sucesso=1");
		}else{
			header("Location: adicionar-candidato.php?sucesso=0");
		}
	}
?>
