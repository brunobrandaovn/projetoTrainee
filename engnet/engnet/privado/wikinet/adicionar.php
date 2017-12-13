<?php

	function conecta(){
		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "projetofinal";
			$con = mysqli_connect($servername, $username, $password, $dbname);
			$con->set_charset('utf8');

			return $con;
	}

		date_default_timezone_set('America/Sao_Paulo');
		

		$id = 1;
		$titulo = $_POST['titulo'];
		$date = date('Y-m-d H:i');
		$diretoria = $_POST['diretoria'];
		$artigo = $_POST['artigo'];
		$autor = $_POST['autor'];
		

		$con = conecta();

		$sql = "INSERT INTO wikinet (id, id_diretoria, id_membro_autor, date_post, conteudo, titulo) VALUES ('$id','$diretoria', '$autor', '$date', '$artigo', '$titulo')";
		
		$result = mysqli_query($con, $sql);

		echo $date;
		echo $artigo;
		echo $diretoria;
		
		if($result){
			header("location:adicionar-projeto.php");
		}else{
			header("location:adicionar-projeto.php");

		}

		
?>