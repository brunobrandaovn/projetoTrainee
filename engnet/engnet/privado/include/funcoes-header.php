<?php

function conexao(){
		
		try{
			$conexao = new PDO('mysql:host=localhost;dbname=engne598_db', 'root', '');
    		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		$conexao->exec("SET CHARACTER SET utf8");
    	}catch(PDOException $e){
    		echo 'ERROR: '.$e->getMessage();
    	}
		return $conexao;
	}

	function selecionaMembroHeader(){
		//header('Content-Type: text/html; charset=utf-8');
    	$conexao = conexao();
    	$select = "SELECT * from membros WHERE usuario='".$_SESSION['usuarioEngNet']."'";
    	try {
    		$result = $conexao->prepare($select);
         	$result->execute();
         	$contar = $result->rowCount();
        	if ($contar >= 1) {
        		while ($mostra = $result->FETCH(PDO::FETCH_OBJ)){
            		return $mostra;
            	}
        	}else{
            echo '<div class="erro"> <span class="negrito"> AVISO!</span> Nenhuma sessão no sistema!</div>';
        	}
    	}catch (PDOException $e) {
        	echo $e;
    	}
	}

?>