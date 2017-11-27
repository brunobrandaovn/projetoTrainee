<?php
    include '../../include/requisition.php';
    include '../../funcoes/funcoes.php';
    
    $idCom = $_GET['id'];
    $idPs = $_GET['idPs'];
    if(!isset($_GET['id'])){
        header("Location: configurar-ps.php");
    }
        
    $tabelaCompetencias = "competencia_ps";
    
    $competencias = selecionarObjetoPorId("competencias", $idCom);
    
    if(verificaCompetenciaTabela($tabelaCompetencias, $idCom, $idPs) == true){
        if(inserirCompetenciaPs($idCom, $idPs)){
           echo "add com sucesso";
            header("Location: ../conf-ps.php?id=$idPs&sucesso=1");
        }else{
            header("Location: ../conf-ps.php?id=$idPs&sucesso=1");
        }
    }else{
        echo '<div class="erro"> <span class="negrito"> AVISO!</span> Erro ao adicionar!</div>';
        header("Location: ../conf-ps.php?id=$idPs&sucesso=1");
        exit;
    }
?>