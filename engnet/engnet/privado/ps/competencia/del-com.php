<?php
		include "../../include/requisition.php";
		include "../../funcoes/funcoes.php";

		if (isset($_GET['idCom'])) {
			if(deletarItem("competencias", $_GET['idCom'])){
				header("Location: listar-competencia.php?sucesso=2");
			}else{
				header("Location: listar-competencia.php?erro=2");
			}

		}


?>