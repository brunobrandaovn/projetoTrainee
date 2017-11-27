<div class="box">
  <div class="box-header">
    <h3 class="box-title">Resultado Final</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="tabelaCandidatos" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>Nome</th>
        <th>Nota</th>
      </tr>
      </thead>
      <tbody>
      <?php
        $listarCandidatos = selecionarObjetoPsNota("candidatos", $id);
        while($listarCandidato = $listarCandidatos->fetch_assoc()){
      ?>
      <tr>
        <td><?php $candidato = selecionarObjetoPorId("candidatos", $listarCandidato["id"]); echo $candidato["nome"] ; ?></td>
        <td><?php echo $candidato["nota"]?></td>
      </tr>
      <?php
          } 
      ?>
      </tbody>
      <tfoot>
      <tr>
        <th>Nome</th>
        <th>Nota</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>