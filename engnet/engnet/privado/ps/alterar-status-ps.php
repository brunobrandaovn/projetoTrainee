<?php
	include "../funcoes/funcoes.php";
	include "../include/requisition.php";

	if (isset($_POST["tAdicionar"])) {
		$id     = $_POST["tId"];
		$status = $_POST["tStatus"];

		if (alterarStatusPs($id, $status)) {
			header("Location: conf-ps.php?id=".$id."");
		}
	}
?>