<?php
		include "../../include/requisition.php";
		include "../../funcoes/funcoes.php";

		if (isset($_GET['id']) && isset($_GET['idPs'])) {
			if(deletarDinamicaPs("dinamicas_ps", $_GET['id'], $_GET['idPs'])){
				header("Location: ../conf-ps.php?id=".$_GET['idPs']."&sucesso=1");
			}else{
				header("Location: listar-dinamica.php?erro=2");
			}

		}
?>