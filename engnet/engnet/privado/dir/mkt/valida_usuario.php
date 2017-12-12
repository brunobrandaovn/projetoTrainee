<?php
  require_once('db_blog.php');

  $usuario =  $_POST['usuario'];
  $senha =  $_POST['senha'];

  $sql = " SELECT * FROM membros WHERE cpf = '$usuario' AND senha = '$senha' ";

  $objDb = new db();
  $link = $objDb->conecta_mysql();

  $resultado_id = mysqli_query($link,$sql);

  if($resultado_id){
    $dados_do_usuario = mysqli_fetch_array ($resultado_id);

    var_dump($dados_do_usuario);
  } else {
    echo 'Meu bom! Deu ruim, rs.';
  }

?>
