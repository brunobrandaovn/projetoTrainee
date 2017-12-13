<?php
	
	/*
	include "../../funcoes/funcoes.php"

	/*$id = 1;
	$nome = $_POST['nome'];
	$codigo =  $_POST['codigo'];
	$cliente = $_POST['cliente'];
	$desc = $_POST['desc'];
	$valor = $_POST['valor'];
	$id_es = 1;*/

	//inserirProjeto($id, $nome, $codigo, $cliente, $desc, $valor, $id_es);
	//inserirProjeto('$_POST['nome']','$_POST['desc']');
	

/*
    require_once('../../../db.class.php');

    echo $_POST['nome'];
    $nome = $_POST['nome'];
	$codigo =  $_POST['codigo'];
	//$cliente = $_POST['cliente'];
	$cliente = 2;
	$desc = 5;
	$id = 1;
	$id_es = 1;
	$valor = 100;

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    //$sql = "INSERT INTO projetos (id ,nome, codigo, id_cliente, descricao, valor, id_estado_negociacao) VALUES ('$id','$nome', '$codigo', '$cliente', '$desc', '$valor', '$id_es')";

    $sql = "INSERT INTO oi (arroz, feijao) VALUES ('$id','$desc')";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }else{
        echo "Erro ao registrar o usuário!";
    }

*/



	function conecta(){
		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "projetofinal";
			$con = mysqli_connect($servername, $username, $password, $dbname);
			$con->set_charset('utf8');

			return $con;
	}

		$id = 1;
		$nome = $_POST['nome'];
		$codigo =  $_POST['codigo'];
		$id_cliente = $_POST['cliente'];
		$desc = $_POST['desc'];
		$valor = $_POST['valor'];
		$id_es = 1;

		$con = conecta();

		$sql = "INSERT INTO projetos (id, nome, codigo, id_cliente, descricao, valor, id_estado_negociacao) VALUES ('$id','$nome', '$codigo', '$id_cliente', '$desc', '$valor', '$id_es')";

		//$sql = "INSERT INTO oi (arroz, feijao) VALUES ('$nome','$desc')";
		
		$result = mysqli_query($con, $sql);
		
		if($result){
			header("location:adicionar-projeto.php");
		}else{
			header("location:adicionar-projeto.php");

		}

		
	

/*
	$nome = $_POST['nome'];
	$sobrenome =  $_POST['sobrenome'];
	$empresa = $_POST['empresa'];
	$projeto = $_POST['projeto'];
	$telefone = $_POST['telefone'];

	echo $_POST['telefone'];
	echo "<br/>";

	
	$sql = $con->query("INSERT into cliente (nome, sobrenome, empresa, id_projeto, telefone) values ('$nome', '$sobrenome', '$empresa', '$projeto', '$telefone')");

	if($sql){
		echo "A insercao deu certo.";
		echo "<br/>";
	}else{
		echo "A insercao NAO funcionou.";
		echo "<br/>";
	}

	*/



?>