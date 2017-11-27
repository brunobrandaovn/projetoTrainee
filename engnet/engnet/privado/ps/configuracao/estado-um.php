<div class="box box-solid"> 
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Dados do Ps</h3>  
    </div>
    <div class="box-body">
      <h4>Nome: </h4>
      <h5><?php echo $ps['nome'];?></h5> 
      <h4>Status:</h4>
      <h5>Configuração</h5>
    </div>
  </div>
</div>

<div class="box box-solid">  
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Adicionar dinâmicas ao Processo Seletivo</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="tabelaProcessos1" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Nome</th>
          <th>Adicionar</th>
        </tr>
        </thead>
        <tbody>
        <?php
          $listarDinamicas = selecionarObjeto("dinamicas");
          while($listarDinamica = $listarDinamicas->fetch_assoc()){
        ?>
        <tr>
          <td><?php echo $listarDinamica["nome"]; ?></td>
          <?php 
            if (verificaDinamicaTabela("dinamicas_ps", $listarDinamica["id"] ,$ps["id"]) == true) {
            ?>
            <td><a href="dinamica/add-din.php?id=<?php echo $listarDinamica["id"]?>&idPs=<?php echo $ps["id"]?>"><span class="label label-success">Adicionar</span></a></td>
            <?php
            }else{
              ?>
            <td><a href="dinamica/rem-din.php?id=<?php echo $listarDinamica["id"]?>&idPs=<?php echo $ps["id"]?>"><span class="label label-danger">Remover</span></a></td>
            <?php
            }

          ?>
        </tr>
        <?php
            } 
        ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Nome</th>
          <th>Adicionar</th>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<div class="box box-solid">  
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Lista de Competências</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="tabelaProcessos2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Nome</th>
          <th>Adicionar</th>
        </tr>
        </thead>
        <tbody>
        <?php
          $listaCompetencias = selecionarObjeto("competencias");

          while($listaCompetencia = $listaCompetencias->fetch_assoc()){
        ?>
        <tr>
          <td><?php echo $listaCompetencia["nome"]; ?></td>
          <?php
          if (verificaCompetenciaTabela("competencia_ps", $listaCompetencia["id"], $ps["id"]) == true){
          ?>
          <td><a href="competencia/add-com.php?id=<?php echo $listaCompetencia["id"]?>&idPs=<?php echo $ps["id"]?>"><span class="label label-success">Adicionar</span></a></td>
          <?php            
          }else{
            ?>  
            <td><a href="competencia/rem-com.php?id=<?php echo $listaCompetencia["id"]?>&idPs=<?php echo $ps["id"]?>"><span class="label label-danger">Remover</span></a></td>
            <?php
          }
          ?>
        </tr>
        <?php
          }
        ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Nome</th>
          <th>Adicionar</th>
        </tr>
        </tfoot>
      </table>
    </div> 
  </div>
</div>