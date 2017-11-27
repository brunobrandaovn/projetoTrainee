<?php include "../../include/requisition.php"; ?>
<?php include "../../funcoes/funcoes.php";?>
<?php $membro = selecionarMembro(); ?>
<?php if(!verificaAvaliador($membro['id'])){
  header("Location: ../../index.php");
}else{ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Processo Seletivo - Adicionar Candidato</title>
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
  <?php include "../../include/header.php";?>
  <!-- Menu do site-->
  <?php include "../../include/menu.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Adicionar Candidato
        <small>Processo Seletivo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Processo Seletivo</li>
        <li class="active">Candidato</li>
        <li class="active">Adicionar Candidato</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Dados do Candidato</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="add-can.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="cNome">Nome</label>
                  <input type="text" class="form-control" id="cNome" name="tName" placeholder="Nome">
                </div>
                <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Data de Nascimento:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tNascimento" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
              </div>
                <!-- /.input group -->

                <div class="form-group">
                  <label for="cSemestre">Semestre</label>
                  <input type="text" name="tSemestre" class="form-control" id="cSemestre" placeholder="Semestre">
                </div>

                <div class="form-group">
                  <label for="cMatricula">Matrícula</label>
                  <input type="text" name="tMatricula" class="form-control" id="cMatricula" placeholder="Matrícula">
                </div>

                <div class="form-group">
                  <label for="cEmail">E-mail</label>
                  <input type="email" name="tEmail" class="form-control" id="cEmail" placeholder="Email">
                </div>

                <div class="form-group">
                  <label for="cTelefone">Telefone</label>
                  <input type="text" name="tTelefone" class="form-control" id="cTelefone" placeholder="Telefone">
                </div>

                <div class="form-group">
                  <label for="cMotivo">Motivo</label>
                  <textarea name="tMotivo" class="form-control" id="cMotivo" placeholder="Motivo"></textarea>
                </div>

                <div class="form-group">
                  <label for="cPalavra">Palavra</label>
                  <input type="text" name="tPalavra" class="form-control" id="cPalavra" placeholder="Palavra">
                </div>

                <div class="form-group">
                <label>Processo Seletivo</label>
                <select name="tPs" class="form-control" style="width: 100%;">
                  <?php
                      $processosSeletivos = selecionarObjeto("ps");
                      while($proc = $processosSeletivos->fetch_assoc()){
                  ?>
                    <option value="<?php echo $proc['id']?>"> <?php echo $proc["nome"]?> </option>
                  <?php
                      }
                  ?>

                </select>
              </div>
              </div>

             
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="tAdicionar" class="btn btn-primary">Adicionar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
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
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/engnet/engnet/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="http://localhost/engnet/engnet/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="http://localhost/engnet/engnet/plugins/input-mask/jquery.inputmask.js"></script>
<script src="http://localhost/engnet/engnet/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="http://localhost/engnet/engnet/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

  })

  $(document).ready(function(){
  $("#cMatricula").inputmask("99/9999999");
  $("#cSemestre").inputmask("99");
  $("#cTelefone").inputmask("(99) 9 9999-9999");
});
</script>
</body>
</html>

<?php } ?>