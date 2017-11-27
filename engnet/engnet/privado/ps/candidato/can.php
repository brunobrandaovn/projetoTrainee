<?php include "../../include/requisition.php"; ?>
<?php include "../../funcoes/funcoes.php";?>
<?php if (!isset($_GET["idCan"])){
    header("Location: ../../index.php");
}else{
    $idCandidato = $_GET["idCan"];
    $candidato = selecionarObjetoPorId("candidatos", $idCandidato);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Processo Seletivo - Listar Candidatos</title>
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
        Perfil
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Perfil</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    
    <div class="col-md-5">
      <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php if($candidato['foto'] == null){echo "http://engnetconsultoria.com.br/wp-content/uploads/2016/09/1473090758699-1257295197.jpg"; }else {echo $candidato['foto'];}?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $candidato["nome"];?></h3>

              <p class="text-muted text-center">Candidato</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>E-mail</b> <a class="pull-right"><?php echo $candidato["email"] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Semestre</b> <a class="pull-right"><?php echo $candidato["semestre"]?>º semestre</a>
                </li>
                <li class="list-group-item">
                  <b>Nascimento</b> <a class="pull-right"><?php echo $candidato["nascimento"] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Telefone</b> <a class="pull-right"><?php echo $candidato["telefone"] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Processo Seletivo</b> <a class="pull-right"><?php $ps = selecionarObjetoPorId("ps" , $candidato["ps"]); echo $ps["nome"];?></a>
                </li>

                <li class="list-group-item">
                  <b>Motivo por entrar na EngNet</b> <a class="pull-right"></a>
                </li>
                <p><?php echo $candidato["motivo"]?></p>
                <li class="list-group-item">
                  <b>Define-se como</b> <a class="pull-right"></a>
                </li>
                <p><?php echo $candidato["palavra"]?></p>
              </ul>
              <?php if($candidato["entrevista"] == null){ ?>
              <a href="entrevista.php?candidato=<?php echo $candidato["id"]; ?>" class="btn btn-primary btn-block"><b>Entrevistar</b></a>
              <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
    <?php if ($candidato["entrevista"] != null) { 
        $entrevista = selecionarEntrevistaPorCandidato($candidato["id"]);
      ?>
    <div class="row">
    <section class="connectedSortable">
    <div class="col-md-6">
      <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">              
              <h3 class="profile-username text-center">Entrevista</h3>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Entrevistadores</b> <a class="pull-right"><?php echo $entrevista["avaliadores"] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Currículo</b> <a class="pull-right"><?php if($entrevista["curriculo"]==1){echo "Sim";}else{echo "Não";} ?></a>
                </li>
                <li class="list-group-item">
                  <b>O que você acha da empresa?</b> <a class="pull-right"></a>
                  <p><?php echo $entrevista["perguntaUm"] ?></p>
                </li>
                <li class="list-group-item">
                  <b>Quais suas intensões ao se candidatar ao Processo Seletivo?</b> <a class="pull-right"></a>
                  <p><?php echo $entrevista["perguntaDois"] ?></p>
                </li>
                <li class="list-group-item">
                  <b>Como você acha que pode ajudar a empresa?</b> <a class="pull-right"></a>
                  <p><?php echo $entrevista["perguntaTres"] ?></p>
                </li>

                <li class="list-group-item">
                  <b>O que gostaria que a EngNet te proporcionasse?</b> <a class="pull-right"></a>
                  <p><?php echo $entrevista["perguntaQuatro"] ?></p>
                </li>
                <li class="list-group-item">
                  <b>Porquê escolheu Engenharia de Redes?</b> <a class="pull-right"></a>
                  <p><?php echo $entrevista["perguntaCinco"] ?></p>
                </li>
                <li class="list-group-item">
                  <b>Tem alguma dúvida sobre a EngNet?</b> <a class="pull-right"></a>
                  <p><?php echo $entrevista["perguntaSeis"] ?></p>
                </li>
                <li class="list-group-item">
                  <b>Defina-se em uma palavra.</b> <a class="pull-right"></a>
                  <p><?php echo $entrevista["perguntaSete"] ?></p>
                </li>
                
                <li class="list-group-item">
                  <b>Com o que gostaria de trabalhar?</b> <a class="pull-right"></a>
                  <p><?php echo $entrevista["perguntaOito"] ?></p>
                </li>
                <li class="list-group-item">
                  <b>Diga alguns de seus defeitos e algumas qualidades?</b> <a class="pull-right"></a>
                  <p><?php echo $entrevista["perguntaNove"] ?></p>
                </li>
                <li class="list-group-item">
                  <b>Observações.</b> <a class="pull-right"></a>
                  <p><?php echo $entrevista["perguntaDez"] ?></p>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
    </section>
</div>
<?php } ?>
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
<!-- DataTables -->
<script src="http://localhost/engnet/engnet/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://localhost/engnet/engnet/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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
<?php } ?>