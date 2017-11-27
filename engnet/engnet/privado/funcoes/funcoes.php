<?php
	function conecta(){
		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "engne598_db";
			$con = mysqli_connect($servername, $username, $password, $dbname);
			$con->set_charset('utf8');

			return $con;
	}

/*	function selecionarMembro(){
		//header('Content-Type: text/html; charset=utf-8');
    	$conexao = conecta();
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
*/
	function selecionarMembro(){
		$con = conecta();
		$sql = "SELECT * FROM membros WHERE usuario='".$_SESSION['usuarioEngNet']."'";
		$result = mysqli_query($con, $sql);
		if (!$result) {
        	die('Error: ' . mysqli_error($con));
    	}
    	if ($result->num_rows > 0) {
        	while ($objeto = $result->fetch_assoc()){
            	mysqli_close($con);
            	return $objeto;                           
        	}            
    	}

	}

	function conectarBD(){
		header('Content-Type: text/html; charset=utf-8');
	try{
		$conexao = new PDO('mysql:host=localhost;dbname=engne598_db', 'root', '');
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexao->exec("SET CHARACTER SET utf8");

		return $conexao;
	} 

	catch(PDOException $e){
	    echo 'ERROR: '.$e->getMessage();
	}
	}

	function selecionarObjeto($nomeTabela){
		$con = conecta();
		$sql = "SELECT * FROM $nomeTabela";
		
    	$result = mysqli_query($con,$sql);
    
    	if (!$result) {
        	die('Error: ' . mysqli_error($con));
    	}
    	mysqli_close($con);
    	return $result;
	}

	function selecionarObjetoPs($nomeTabela, $ps){
		$con = conecta();
		$sql = "SELECT * FROM $nomeTabela WHERE ps = $ps";
		
    	$result = mysqli_query($con,$sql);
    
    	if (!$result) {
        	die('Error: ' . mysqli_error($con));
    	}
    	mysqli_close($con);
    	return $result;
	}

	function selecionarObjetoPsNota($nomeTabela, $ps){
		$con = conecta();
		$sql = "SELECT * FROM $nomeTabela WHERE ps = $ps order by  nota desc";
		
    	$result = mysqli_query($con,$sql);
    
    	if (!$result) {
        	die('Error: ' . mysqli_error($con));
    	}
    	mysqli_close($con);
    	return $result;
	}

	function selecionarObjetoPorId($nomeTabela, $id){
		$con = conecta();
		$sql = "SELECT * FROM $nomeTabela WHERE id = '$id'";
		$result = mysqli_query($con, $sql);
		if (!$result) {
        	die('Error: ' . mysqli_error($con));
    	}
    	if ($result->num_rows > 0) {
        	while ($objeto = $result->fetch_assoc()){
            	mysqli_close($con);
            	return $objeto;                           
        	}            
    	}
	}

	function selecionarEntrevistaPorCandidato($id){
		$con = conecta();
		$sql = "SELECT * FROM entrevista WHERE candidato = '$id'";
		$result = mysqli_query($con, $sql);
		if (!$result) {
        	die('Error: ' . mysqli_error($con));
    	}
    	if ($result->num_rows > 0) {
        	while ($objeto = $result->fetch_assoc()){
            	mysqli_close($con);
            	return $objeto;                           
        	}            
    	}
	}

	function selecionarObjetoPorIdNota($nomeTabela, $id){
		$con = conecta();
		$sql = "SELECT * FROM $nomeTabela WHERE id = '$id' ORDER BY nota";
		$result = mysqli_query($con, $sql);
		if (!$result) {
        	die('Error: ' . mysqli_error($con));
    	}
    	if ($result->num_rows > 0) {
        	while ($objeto = $result->fetch_assoc()){
            	mysqli_close($con);
            	return $objeto;                           
        	}            
    	}
	}

	function selecionarDinamicaPorPs($ps){
		$con = conecta();
		$sql = "SELECT * FROM dinamicas_ps WHERE ps = '$ps'";
		$result = mysqli_query($con, $sql);
		if (!$result) {
        	die('Error: ' . mysqli_error($con));
    	}
    	mysqli_close($con);
		return $result;
	}
	function selecionarCompetenciaPorPs($ps){
		$con = conecta();
		$sql = "SELECT * FROM competencia_ps WHERE ps = '$ps'";
		$result = mysqli_query($con, $sql);
		if (!$result) {
        	die('Error: ' . mysqli_error($con));
    	}
    	mysqli_close($con);
		return $result;
	}


	function inserirDinamicaPs($idDinamica, $idPs){
		$con = conecta();
		$sql = "INSERT into dinamicas_ps (dinamica, ps) VALUES ('$idDinamica', '$idPs')";

		$result = mysqli_query($con, $sql);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}

	function inserirCompetenciaPs($idCompetencia, $idPs){
		$con = conecta();
		$sql = "INSERT into competencia_ps (competencia, ps) VALUES ('$idCompetencia', '$idPs')";

		$result = mysqli_query($con, $sql);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}

	function inserirMembro($nome, $sobrenome, $diretoria, $cargo, $nascimento, $email, $usuario, $senha, $entrada){
		$con = conecta();
		$sql = "INSERT into membros (nome, sobrenome, diretoria, cargo, nascimento, email, usuario, senha,  entrada) VALUES ('$nome', '$sobrenome', '$diretoria', '$cargo','$nascimento', '$email', '$usuario', 'md5($senha)', '$entrada')";
		$result = mysqli_query($con, $sql);
		if (!$result) {
        	die('Error: ' . mysqli_error($con));
    	}
		if($result){
			return true;
		}else{
			return false;
		}
	}

	function inserirCandidato($nome, $nascimento, $semestre, $matricula, $email, $telefone, $motivo, $palavra, $ps, $foto){
		$con = conecta();
		$sql = "INSERT into candidatos (nome, nascimento, email, semestre, matricula, telefone, foto, ps, palavra, motivo) VALUES ('$nome', '$nascimento', '$email', '$semestre', '$matricula', '$telefone', '$foto', '$ps', '$palavra','$motivo')";
		$result = mysqli_query($con, $sql);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}	


	function inserirEntrevista($candidato, $entrevistadores, $curriculo, $perguntaUm, $perguntaDois, $perguntaTres, $perguntaQuatro, $perguntaCinco, $perguntaSeis, $perguntaSete, $perguntaOito, $perguntaNove, $perguntaDez){
		$con = conecta();
		$sql = "INSERT INTO entrevista (avaliadores, candidato, curriculo, perguntaUm, perguntaDois, perguntaTres, perguntaQuatro, perguntaCinco, perguntaSeis, perguntaSete, perguntaOito, perguntaNove, perguntaDez) VALUES ('$entrevistadores', '$candidato', '$curriculo', '$perguntaUm', '$perguntaDois', '$perguntaTres', '$perguntaQuatro', '$perguntaCinco', '$perguntaSeis', '$perguntaSete', '$perguntaOito', '$perguntaNove', '$perguntaDez')";
		$result = mysqli_query($con, $sql);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}

	function inserirCompetencia($nome, $peso, $notaZero ,$notaUm, $notaDois, $notaTres, $notaQuatro, $notaCinco){
		$con = conecta();
		$sql = "INSERT INTO competencias (nome, peso, legendaZero, legendaUm, legendaDois, legendaTres, legendaQuatro, legendaCinco) VALUES ('$nome', '$peso', '$notaZero', '$notaUm', '$notaDois', '$notaTres', '$notaQuatro', '$notaCinco')";
		$result = mysqli_query($con, $sql);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}

	function inserirDinamica($nome, $peso, $descricao){
		$con = conecta();
		$sql = "INSERT INTO dinamicas (nome, peso, descricao) VALUES ('$nome', '$peso', '$descricao')";
		$result = mysqli_query($con, $sql);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}

	function inserirAvaliador($id, $ps){
		$con = conecta();
		$sql = "INSERT into avaliador (usuario, ps) VALUES ('$id', '$ps')";
		$result = mysqli_query($con, $sql);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}

	function deletarItem($nomeTabela, $idItem){
		$con = conecta();
		$sql = "DELETE FROM $nomeTabela WHERE id = $idItem";

		$result = mysqli_query($con, $sql);

		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	function deletarDinamicaPs($nomeTabela, $idItem, $idPs){
		$con = conecta();
		$sql = "DELETE FROM $nomeTabela WHERE dinamica = $idItem and ps = $idPs";

		$result = mysqli_query($con, $sql);

		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	function deletarCompetenciaPs($nomeTabela, $idItem, $idPs){
		$con = conecta();
		$sql = "DELETE FROM $nomeTabela WHERE compesetencia = $idItem and ps = $idPs";

		$result = mysqli_query($con, $sql);

		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	function verificaDinamicaTabela($tabelaDinamica, $id_dn, $id_ps){
		$dinamica = selecionarObjeto($tabelaDinamica);
		if ($dinamica->num_rows > 0) {
        	while ($objeto = $dinamica->fetch_assoc()){
        		if ($objeto["dinamica"] == $id_dn && $objeto["ps"] == $id_ps){
           			return false;                     
        		}            
    		}
		}
		return true;
	}

	function verificaCompetenciaTabela($tabelaCompetencia, $id_com, $id_ps){
		$competencia = selecionarObjeto($tabelaCompetencia);
		if ($competencia->num_rows > 0) {
        	while ($objeto = $competencia->fetch_assoc()){
        		if ($objeto["competencia"] == $id_com && $objeto["ps"] == $id_ps){
           			return false;                     
        		}            
    		}
		}
		return true;
	}

	function alterarStatusPs($id, $status){
		$conexao = conecta();
		$sql = "UPDATE ps SET status = $status WHERE id = $id";
		$result = mysqli_query($conexao, $sql);

		if ($result > 0) {
			return true;
		}else{
			return false;
		}
	}

	function updateCandidato($nome, $nascimento, $semestre, $matricula, $email, $telefone, $motivo, $palavra, $id){
		$conexao = conecta();
		$sql = "UPDATE candidatos SET nome = '$nome', nascimento = '$nascimento', semestre = '$semestre', matricula = '$matricula', email = '$email', telefone = '$telefone', motivo = '$motivo', palavra = '$palavra' WHERE id = $id";
		$result = mysqli_query($conexao, $sql);

		if ($result > 0) {
			return true;
		}else{
			return false;
		}	
	}

	function updateFoto($destino, $id){
		$conexao = conecta();
		$sql = "UPDATE candidatos SET foto = '$destino' WHERE id = $id";
		$result = mysqli_query($conexao, $sql);

		if ($result > 0) {
			return true;
		}else{
			return false;
		}
	}

	function inserirNotaDatabase($avaliador, $candidato, $ps, $idDinamica, $idCompetencia, $nota){
		$con = conecta();
		$sql = "INSERT INTO avaliacao (avaliador, candidato, ps, dinamica, competencia, nota) values ('$avaliador', '$candidato', '$ps', '$idDinamica', '$idCompetencia', '$nota')";
		$result = mysqli_query($con, $sql);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}

	function verificaAvaliador($idMembroAtivo){
		$con = conecta();
	    $select = "SELECT * from avaliador WHERE usuario='".$idMembroAtivo."'";
	    
	    $result = mysqli_query($con, $select);

	    if ($result->num_rows > 0) {
	    	return true;
	    }else{
	    	return false;    
		}
    }

    function verificarAvaliacao($idAvaliador, $idCandidato){
	   	$con= conecta();
	    $select = "SELECT * from avaliacao WHERE avaliador='".$idAvaliador."' and candidato='".$idCandidato."'";
	    $result = mysqli_query($con, $select);
	    $contar = $result->num_rows;
        if ($contar >= 1) {
        	while ($mostra = $result->fetch_assoc()){
            	return true;
        	}
        } else {
        	return false;
        }
	}

	function recuperarSomaNotasCandidato($idCandidato, $ps){
		$con = conecta();
		$sql = "SELECT * FROM avaliacao WHERE candidato = '$idCandidato' and ps = '$ps'";
		$result = mysqli_query($con, $sql);
		$soma = 0;
		while ($rows = $result->fetch_assoc()) {
			$soma = $soma + $rows["nota"];
		}
		return $soma;
	}

	function recuperarQuantidadeIteracoes($idCandidato, $ps){
		$con = conecta();
		$sql = "SELECT * FROM avaliacao WHERE candidato = '$idCandidato' and ps = '$ps'";
		$result = mysqli_query($con, $sql);
		$soma = 0;
		while ($rows = $result->fetch_assoc()) {
			$soma++;
		}
		return $soma;
	}

	function alterarMediaCandidato($idCandidato, $nota){
		$conexao = conecta();
		$sql = "UPDATE candidatos SET nota = $nota WHERE id = $idCandidato";
		$result = mysqli_query($conexao, $sql);

		if ($result > 0) {
			return true;
		}else{
			return false;
		}
	}

	function updateSenha($senha, $idUser){
		$con = conecta();
		$sql = "UPDATE membros SET senha = md5($senha) WHERE id = $idUser";

		$result = mysqli_query($con, $sql);

		if ($result > 0) {
			return true;
		}else{
			return false;
		}
	}

	function updateMembro($nome, $sobrenome , $nascimento, $usuario, $foto, $idUser){
		$con = conecta();
		$sql = "UPDATE membros SET nome = '$nome', sobrenome = '$sobrenome', nascimento = '$nascimento', usuario = '$usuario', foto = '$foto'  WHERE id = $idUser";

		$result = mysqli_query($con, $sql);

		if ($result > 0) {
			return true;
		}else{
			return false;
		}
	}

	function updateEntrevista($candidato){
		$con = conecta();
		$sql = "UPDATE candidatos SET entrevista = 1 where id = $candidato";
		$result = mysqli_query($con, $sql);

		if ($result > 0) {
			return true;
		}else{
			return false;
		}
	}

?>