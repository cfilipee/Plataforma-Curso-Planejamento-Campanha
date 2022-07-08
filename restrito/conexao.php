<?php
    //$server = "";
getenv(string $server): string;
    //$user = "";
getenv(string $user): string;
    //$pass = "";
getenv(string $pass): string;
    //$bd = "";
getenv(string $bd): string;

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

