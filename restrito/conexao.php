<?php
    $server = "";
    $user = "";
    $pass = "";
    $bd = "";

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

