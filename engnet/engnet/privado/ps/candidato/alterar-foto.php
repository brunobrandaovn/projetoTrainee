<?php
	include "../../include/requisition.php";
	include "../../funcoes/funcoes.php";

	$destino = "";
	if (isset($_POST['tAlterarFoto'])) {
	// verifica se foi enviado um arquivo
		if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] ==0) {
			$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
			$nome = $_FILES['arquivo']['name'];

			$extensao = pathinfo($nome, PATHINFO_EXTENSION);
			$extensao = strtolower($extensao);

			if (strstr(".jpg;.jpeg;.gif;.png", $extensao)) {
				$novoNome = uniqid(time()).".".$extensao;
				$destino = "img/".$novoNome;

				if (@move_uploaded_file($arquivo_tmp, $destino)) {
					echo "Arquivo salvo com sucesso!";
				}else{
					echo "Erro ao salvar o arquivo";
				}
			}else{
				echo "Você poderá enviar apenas arquivo do tipo .jpeg, .jpg, .gif e .png";
			}
		}else{
			echo "você não enviou nenhum arquivo";
		}

		$candidato = $_POST["tCandidato"];
		$foto = "http://localhost/engnet/engnet/privado/ps/candidato/".$destino;

		if(updateFoto($foto, $candidato)){
			header("Location: selecionar-ps.php?sucesso=1");
		}else{
			header("Location: selecionar-ps.php?erro=3");
		}
	}



?>