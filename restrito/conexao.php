<?php

    /**
     * ALTERAR NOME DAS VARIAVEIS PARA MAIUSCULO NO UMBLER (PARA SEGUIR O PADRÃO DOS NOMES DE VARIÁVEIS(CHAVES))
     * FOI ALTERADO OS NOMES DAS VARIÁVEIS PARA SER MAIS ESPECIFICO E
     * COM ISSO DIMINUIR A CHANCE DE CONFLITAR COM UMA OUTRA VARIÁVEL
     * Sugestão de nomes(key) para as variáveis: "SERVER_PODEMOS", "SERVER_USER_PODEMOS" e assim por diante;
     */

    $server = "";
    $user = "";
    $pass = "";
    $bd = "";

    /**
     * if para verificar e decidir metodo que conseguirá pegar o valor das variáveis de ambiente.
     */
    if (isset($_SERVER['SERVER_PODEMOS'])){
        $server = $_SERVER['SERVER_PODEMOS'];
       // echo("<script>console.log('USAR : $_SERVER" . $server . "');</script>"); Descomentar linha para testes locais ou para saber qual método correto que pega as variáveis do UMBLER
    } else {
        $server = getenv("SERVER_PODEMOS");
       // echo("<script>console.log('Variaveis: getenv("")" . $server . "');</script>"); Descomentar linha para testes locais ou para saber qual método correto que pega as variáveis do UMBLER
    }

    if (isset($_SERVER['SERVER_USER_PODEMOS'])){
        $user = $_SERVER['SERVER_USER_PODEMOS'];
    } else {
        $user = getenv("SERVER_USER_PODEMOS");
    }

    if (isset($_SERVER['SERVER_PASS_PODEMOS'])){
        $pass = $_SERVER['SERVER_PASS_PODEMOS'];
    } else {
        $pass = getenv("SERVER_PASS_PODEMOS");
    }

    if (isset($_SERVER['SERVER_BD_PODEMOS'])){
        $bd = $_SERVER['SERVER_BD_PODEMOS'];
    } else {
        $bd = getenv("SERVER_BD_PODEMOS");
    }


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

