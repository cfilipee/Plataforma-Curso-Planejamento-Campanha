<?php
    $server = "mysql741.umbler.com:41890";
//$server = getenv("server");
    $user = "filipe";
//$user = getenv("user");
    $pass = "8143caio";
//$pass = getenv("pass");
    $bd = "empresa";
//$bd = getenv("bd");

    // $server = "localhost";
    // $user = "root";
    // $pass = "";
    // $bd = "empresa";
   
    $conn = mysqli_connect($server, $user, $pass, $bd);

    // if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
    //     echo "Conectado!";
    // } else 
    //     echo "Erro!";

    function mensagemAlerta($texto, $tipo){

        echo "<div class='alert alert-$tipo' role='alert'>
            $texto
      </div>";

    }
 
?>

