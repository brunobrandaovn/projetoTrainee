<div class="box ">
  <div class="box-header">
    <h3 class="box-title">Lista de Avaliadores</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="tabelaAvaliador" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>Nome</th>
      </tr>
      </thead>
      <tbody>
      <?php
        $listarAvaliadores = selecionarObjetoPs("avaliador", $id);
        while($listarAvaliador = $listarAvaliadores->fetch_assoc()){
      ?>
      <tr>
        <td><?php $dinamica = selecionarObjetoPorId("membros", $listarAvaliador["usuario"]); echo $dinamica["nome"] ; ?></td>
      </tr>
      <?php
          } 
      ?>
      </tbody>
      <tfoot>
      <tr>
        <th>Nome</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Lista de Dinâmicas</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="tabelaProcessos" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>Nome</th>
        <th>Ver</th>
      </tr>
      </thead>
      <tbody>
      <?php
        $listarDinamicas = selecionarObjetoPs("dinamicas_ps", $id);
        while($listarDinamica = $listarDinamicas->fetch_assoc()){
      ?>
      <tr>
        <td><?php $dinamica = selecionarObjetoPorId("dinamicas", $listarDinamica["dinamica"]); echo $dinamica["nome"] ; ?></td>
        <td><a href=""><span class="label label-info">Ver</span></a></td>
      </tr>
      <?php
          } 
      ?>
      </tbody>
      <tfoot>
      <tr>
        <th>Nome</th>
        <th>Ver</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Lista de Competências</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="tabelaCompetências" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>Nome</th>
        <th>Ver</th>
      </tr>
      </thead>
      <tbody>
      <?php
        $listarCompetencias = selecionarObjetoPs("competencia_ps", $id);
        while($listarCompetencia = $listarCompetencias->fetch_assoc()){
      ?>
      <tr>
        <td><?php $competencia = selecionarObjetoPorId("competencias", $listarCompetencia["competencia"]); echo $competencia["nome"] ; ?></td>
        <td><a href=""><span class="label label-info">Ver</span></a></td>
      </tr>
      <?php
          } 
      ?>
      </tbody>
      <tfoot>
      <tr>
        <th>Nome</th>
        <th>Ver</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>


<div class="box">
  <div class="box-header">
    <h3 class="box-title">Lista de Candidatos</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="tabelaCandidatos" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>Nome</th>
        <th>Ver</th>
      </tr>
      </thead>
      <tbody>
      <?php
        $listarCandidatos = selecionarObjetoPs("candidatos", $id);
        while($listarCandidato = $listarCandidatos->fetch_assoc()){
      ?>
      <tr>
        <td><?php $candidato = selecionarObjetoPorId("candidatos", $listarCandidato["id"]); echo $candidato["nome"] ; ?></td>
        <td><a href=""><span class="label label-info">Ver</span></a></td>
      </tr>
      <?php
          } 
      ?>
      </tbody>
      <tfoot>
      <tr>
        <th>Nome</th>
        <th>Ver</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>