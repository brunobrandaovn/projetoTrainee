<?php
if(isset($_REQUEST['sair'])){
    session_destroy();
    session_unset($_SESSION['usuarioEngNet']);
    session_unset($_SESSION['senhaEngNet']);
    header("Location: http://www.engnetconsultoria.com.br");  
}
?>