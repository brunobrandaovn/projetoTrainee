<?php

function conectaM(){
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "engne598_db";
            $con = mysqli_connect($servername, $username, $password, $dbname);
            $con->set_charset('utf8');

            return $con;
    }

    function selecionarMembroM(){
        $con = conectaM();
        $sql = "SELECT * FROM membros WHERE usuario='".$_SESSION['usuarioEngNet']."'";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            die('Error: ' . mysqli_error($con));
        }
        if ($result->num_rows > 0) {
            while ($objeto = $result->fetch_assoc()){
                mysqli_close($con);
                return $objeto;                           
            }            
        }

    }
?>