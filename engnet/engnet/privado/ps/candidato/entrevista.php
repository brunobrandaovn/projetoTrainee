<?php include "../../include/requisition.php"; ?>
<?php include "../../funcoes/funcoes.php";?>
<?php $membro = selecionarMembro(); ?>
<?php if(!verificaAvaliador($membro['id'])){
  header("Location: ../../index.php");
}else{ 
    if (!isset($_GET["candidato"])) {
      header("Location: ../../index.php");
    }else{
        $candidato = selecionarObjetoPorId("candidatos", $_GET["candidato"]);

  ?>
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
        Entrevistar
        <small>Processo Seletivo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Processo Seletivo</li>
        <li class="active">Candidato</li>
        <li class="active">Entrevistar</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
    <section class="connectedSortable">
    <div class="col-md-7">
      <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">              
              <form method="post" action="entrevistar.php">
                <h3 class="profile-username text-center">Entrevista do candidato <?php echo $candidato["nome"] ?></h3>
                <div class="form-group">
                  <label for="cEntrevistadores">Entrevistadores</label>
                  <input type="text" class="form-control" id="cEntrevistadores" name="tEntrevistadores" placeholder="Entrevistadores">
                </div>
                <div class="form-group">
                <label>Trouxe currículo?</label>
                  <select name="tCurriculo" class="form-control" style="width: 100%;">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="cPerguntaUm">O que você acha da empresa?</label>
                  <textarea class="form-control" id="cPerguntaUm" name="tPerguntaUm" placeholder="PerguntaUm">
                    
                  </textarea>  
                </div>
                <div class="form-group">
                  <label for="cPerguntaDois">Quais suas intensões ao se candidatar ao Processo Seletivo?</label>
                  <textarea class="form-control" id="cPerguntaDois" name="tPerguntaDois" placeholder="PerguntaDois">
                    
                  </textarea>  
                </div>
                <div class="form-group">
                  <label for="cPerguntaTres">Como você acha que pode ajudar a empresa?</label>
                  <textarea class="form-control" id="cPerguntaTres" name="tPerguntaTres" placeholder="PerguntaTres">
                    
                  </textarea>  
                </div>
                <div class="form-group">
                  <label for="cPerguntaQuatro">O que gostaria que a EngNet te proporcionasse?</label>
                  <textarea class="form-control" id="cPerguntaQuatro" name="tPerguntaQuatro" placeholder="PerguntaQuatro">
                    
                  </textarea>  
                </div>
                <div class="form-group">
                  <label for="cPerguntaCinco">Porquê escolheu Engenharia de Redes?</label>
                  <textarea class="form-control" id="cPerguntaCinco" name="tPerguntaCinco" placeholder="PerguntaCinco">
                    
                  </textarea>  
                </div>
                <div class="form-group">
                  <label for="cPerguntaSeis">Tem alguma dúvida sobre a EngNet?</label>
                  <textarea class="form-control" id="cPerguntaSeis" name="tPerguntaSeis" placeholder="PerguntaSeis">
                    
                  </textarea>  
                </div>
                <div class="form-group">
                  <label for="cPerguntaSete">Defina-se em uma palavra</label>
                  <textarea class="form-control" id="cPerguntaSete" name="tPerguntaSete" placeholder="PerguntaSete">
                    
                  </textarea>  
                </div>
                <div class="form-group">
                  <label for="cPerguntaOito">Com o que gostaria de trabalhar?</label>
                  <textarea class="form-control" id="cPerguntaOito" name="tPerguntaOito" placeholder="PerguntaOito">
                    
                  </textarea>  
                </div>
                <div class="form-group">
                  <label for="cPerguntaNove">Diga alguns de seus defeitos e algumas qualidades?</label>
                  <textarea class="form-control" id="cPerguntaNove" name="tPerguntaNove" placeholder="PerguntaNove">
                    
                  </textarea>  
                </div>
                <div class="form-group">
                  <label for="cPerguntaDez">Observações.</label>
                  <textarea class="form-control" id="cPerguntaDez" name="tPerguntaDez" placeholder="PerguntaDez">
                    
                  </textarea>  
                </div>
                <input type="hidden" name="tCandidato" value="<?php echo $candidato["id"]; ?>">
                <div class="box-footer">
                <button type="submit" name="tFinalizar" class="btn btn-primary">Finalizar</button>
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
    </section>
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
});
</script>
</body>
</html>

<?php } } ?>