<?php

		$host = 'localhost';
		$usuario = 'root';
		$senha = '';
		$database = 'projetofinal';

		$con = new MySQLi("$host","$usuario","$senha","$database");

		if($con->connect_error){
			echo "Erro ao tentar conectar com o banco de dados";
			echo "<br/>";
		}else{
			echo "A conexao deu certo";
			echo "<br/>";
		}
?>