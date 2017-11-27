<?php
		include "../../include/requisition.php";
		include "../../funcoes/funcoes.php";

		if (isset($_GET['dinamica'])) {
			if(deletarItem("dinamicas", $_GET['dinamica'])){
				header("Location: listar-dinamica.php?sucesso=2");
			}else{
				header("Location: listar-dinamica.php?erro=2");
			}

		}


?>