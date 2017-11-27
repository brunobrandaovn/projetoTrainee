<?php include "../include/requisition.php"; ?>
<?php include "../funcoes/funcoes.php";?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Processo Seletivo - Configuração</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/engnet/engnet/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/engnet/engnet/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/engnet/engnet/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/engnet/engnet/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/engnet/engnet/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/engnet/engnet/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/engnet/engnet/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/engnet/engnet/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/engnet/engnet/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="http://localhost/engnet/engnet/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Cabecalho do site-->
  <?php include "../include/header.php";?>
  <!-- Menu do site-->
  <?php include "../include/menu.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Configuração
        <small>Processo Seletivo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Processo Seletivo</li>
        <li class="active">Configuração</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       <div class="col-xs-12">
        <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Manual de como criar um processo seletivo </h3>
              <div class="pull-right box-tools">
                      <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                      <i class="fa fa-minus"></i></button>
                      
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Criando um Processo Seletivo
                      </a>
                    </h4>
                    
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                      <p> Para criar um processo seletivo, primeiramente deve-se ir na aba Configuração do menu ao lado. Feito isso, coloca-se o nome do Processo Seletivo (recomenda-se o nome PS+semestre e ano, exemplo PS1_2017 ou PS2017).</p>
                      <p> Criado o processo seletivo, agora deve-se realizar a configuração. Para isso, verifique se existe as dinâmicas na database, indo no <code> menu > listar dinâmicas </code> . Caso a dinâmica não exista, pode-se adicionar indo no <code>menu > adicionar dinâmicas</code> . A mesma coisa deve ser feita com as competêmcias que serão analizadas no decorrer do processo. </p>
                      <p> Feito isso, agora na aba <code> menu > configuração</code> você seleciona o processo seletivo que irá configurar clicando na engrenagem ao lado do nome. </p> 
                      <p> O processo seletivo possui três estados. O estado configuração, onde realiza toda configuração; o estado andamento, que mostra todos os dados configurados do processo seletivo; e o estado finalizado, que mostra os resultados obtidos durante o processo seletivo. </p>
                      <p> No inicio da configuração, você seleciona o estado encontra-se o processo seletivo. Para configurar, selecione o estado configuração. </p>
                      <div class="alert alert-info alert-dismissible">
                        <h4><i class="icon fa fa-info"></i> Nota!</h4>
                        Ao criar um processo seletivo, ele vai direto ao estado configuração.
                      </div>
                      <p> No estado configuração, seleciona-se quais serão as dinâmicas da mesma forma e por fim, seleciona as competências avaliadas. </p>
                      <p> Feito isso, agora adiciona-se os avaliadores indo no <code>menu > avaliador > adicionar avaliador</code>. Esta página lista todos os membros e para adicionar basta clicar na seta ao lado. Para remover algum avaliador, basta ir na página <code>menu > avaliador > listar avaliador</code> e clicar na lixeira ao lado do nome.</p>
                      <p>Realizada a configuração, agora basta adicionar os candidatos ao processo seletivo. </p>
                      <p> Para adicionar um candidado, basta ir na página <code>menu > candidatos > adicionar candidato</code> e colocar todos os dados solicitados. </p>
                      <div class="alert alert-info alert-dismissible">
                        <h4><i class="icon fa fa-info"></i> Nota!</h4>
                        Só serão mostrados os processos seletivos que estão no estado de configuração!
                      </div>
                      <p> Adicionado o candidato, agora basta alterar o estado para andamento para ter acesso a avaliação. Somente avaliadores possuem acesso a essa página. </p>
                      <p> Para chegar à página de avaliação, vai em <code>menu > avaliador > avaliar</code>. Feito isso, selecione o processo seletivo que realizará a avaliação. Selecione o candidato que irá avaliar. Coloque todas as notas de acordo com as dinâmicas e competências e clique em <b>AVALIAR</b>. </p>
                      <p>Quando todos os avaliadores tiverem avaliado os candidatos, basta mudar o estado do processo seletivo para finalizado e colher os resultados. </p>
                    </div>
                  </div>
                </div>
 
                </div>
              </div>
            </div>
            <!-- /.box-body -->  



          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Processos Seletivos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tabelaProcessos" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nome</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php $processoSeletivos = selecionarObjeto("ps"); 
                        while ($ps = $processoSeletivos->fetch_assoc()){
                    ?>
                    <tr>
                      <td><?php echo $ps["nome"] ?></td>
                      <td>
                      <?php
                          if($ps["status"] == 0){
                            echo "<a href='conf-ps.php?id=" . $ps["id"] ."'><span class='label label-danger'>Configuração</span></a>";
                          }
                          if($ps["status"] == 1){
                            echo "<a href='conf-ps.php?id=" . $ps["id"] ."'><span class='label label-info'>Andamento</span></a>";
                          }
                          if($ps["status"] == 2){
                            echo "<a href='conf-ps.php?id=" . $ps["id"] ."'><span class='label label-success'>Finalizado</span></a>";
                          }
                      ?>
                      </td>
                    </tr>
                    <?php } ?> 
                </tbody>
                <tfoot>
                <tr>
                  <th>Nome</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
            </div> 
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="http://localhost/engnet/engnet/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/engnet/engnet/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/engnet/engnet/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="http://localhost/engnet/engnet/bower_components/raphael/raphael.min.js"></script>
<script src="http://localhost/engnet/engnet/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/engnet/engnet/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="http://localhost/engnet/engnet/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://localhost/engnet/engnet/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/engnet/engnet/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/engnet/engnet/bower_components/moment/min/moment.min.js"></script>
<script src="http://localhost/engnet/engnet/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="http://localhost/engnet/engnet/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="http://localhost/engnet/engnet/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="http://localhost/engnet/engnet/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/engnet/engnet/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/engnet/engnet/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/engnet/engnet/dist/js/pages/dashboard.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/engnet/engnet/dist/js/demo.js"></script>
<script>
  $(function () {
    $('#tabelaProcessos').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>