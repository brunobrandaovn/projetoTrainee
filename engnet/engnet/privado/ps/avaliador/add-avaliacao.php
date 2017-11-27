<?php
    include "../../include/requisition.php";
	include "../../funcoes/funcoes.php";

	if (isset($_POST['tAvaliar'])) {
		$idPs = $_GET['id'];
		$avaliador = $_GET['idAv'];
		$candidato = $_GET['idCan'];
		$dinamicas = selecionarDinamicaPorPs($idPs);
		$competencias = selecionarCompetenciaPorPs($idPs);
		$quantidadeDinamicas = 0;
		$quantidadeCompetencias = 0;
		$arrayDinamica = array();
		$arrayCompetencia = array();

		while ($dinamica = $dinamicas->fetch_assoc()) {
			array_push($arrayDinamica, $dinamica["dinamica"]);
			$quantidadeDinamicas++;
		}

		while ($competencia = $competencias->fetch_assoc()){
			array_push($arrayCompetencia, $competencia["competencia"]);
			$quantidadeCompetencias++;
		}

		$notas = $_POST['tNota'];
		$count = 5;

		for ($i=0; $i < $quantidadeDinamicas; $i++) { 
			echo "dinamica ".$arrayDinamica[$i]."<br>";
			for ($j=0; $j < $quantidadeCompetencias ; $j++) { 
				$numero = ($count*$i) + $j;
				echo "dinamica ".$arrayDinamica[$i].", ";
				echo "competencia ".$arrayCompetencia[$j]. "=";
				
				inserirNotaDatabase($avaliador, $candidato, $idPs, $arrayDinamica[$i], $arrayCompetencia[$j], $notas[$numero]);

				echo $notas[$numero];
				echo "<br>";
			}
		}

		$soma = recuperarSomaNotasCandidato($candidato, $idPs);
		$divisor = recuperarQuantidadeIteracoes($candidato, $idPs);
		$media = $soma/$divisor;

		alterarMediaCandidato($candidato, $media);

		header("Location: avaliar.php");

	}


?>