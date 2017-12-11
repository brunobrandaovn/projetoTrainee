<?php
  require_once ('db_blog.php');
  $titulo = $_POST['titulo'];
  $conteudo = $_POST['conteudo'];

  $objDb = new db();
  $link = $objDb->conecta_mysql();

  $sql = " insert into blog(titulo,conteudo) values('$titulo','$conteudo')";

  if(mysqli_query($link,$sql)){
    echo 'Deu bom!';
  } else {
    echo 'Deu Ruim!';
  }
?>
