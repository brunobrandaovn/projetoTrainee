<?php
		include "../../include/requisition.php";
		include "../../funcoes/funcoes.php";

		if (isset($_GET['idCan'])) {
			if(deletarItem("candidatos", $_GET['idCan'])){
				header("Location: selecionar-ps.php?sucesso=2");
			}else{
				header("Location: selecionar-ps.php?erro=2");
			}

		}


?>