<?php
    include '../../include/requisition.php';
    include '../../funcoes/funcoes.php';
    
    echo '<link rel="stylesheet" type = "text/css" href="css/estilo.css">';

    $idDin = $_GET['id'];
    $idPs = $_GET['idPs'];
    if(!isset($_GET['id'])){
        header("Location: configurar-ps.php");
    }

    $ps = selecionarObjetoPorId("ps", $idPs);
    $nome = $ps["nome"];        
            
    $tabelaDinamica = "dinamicas_ps";
    
    $dinamicas = selecionarObjetoPorId("dinamicas", $idDin);
    $nome_dn = $dinamicas["nome"];
    $peso_dn = $dinamicas["peso"];

    if(verificaDinamicaTabela($tabelaDinamica, $idDin, $idPs) == true){
        if(inserirDinamicaPs($idDin, $idPs)){
           header("Location: ../conf-ps.php?id=$idPs&sucesso=1");
        }else{
            header("Location: ../conf-ps.php?id=$idPs&sucesso=0");
        }
    }else{
        echo '<div class="erro"> <span class="negrito"> AVISO!</span> Erro ao adicionar!</div>';
         header("Location: ../conf-ps.php?id=$idPs&sucesso=0");
        exit;
    }

?>