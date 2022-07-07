<?php
    $server = "mysql741.umbler.com:41890";
    $user = "filipe";
    $pass = "8143caio";
    $bd = "empresa";
   
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

