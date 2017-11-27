<?php
		include "../../include/requisition.php";
		include "../../funcoes/funcoes.php";

		if (isset($_GET['avaliador'])) {
			if(deletarItem("avaliador", $_GET['avaliador'])){
				header("Location: listar-avaliador.php?sucesso=2");
			}else{
				header("Location: listar-avaliador.php?erro=2");
			}

		}


?>