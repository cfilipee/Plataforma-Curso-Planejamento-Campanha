<?php 
  include "../validar.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='jquery-3.5.1.js'></script>
    <script src='javascript.js'></script>
    <link rel='stylesheet' href='stylesheet.css'>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Aulas Curso</title>
  </head>

  <body>
    <div class="p-3 mb-2 bg-dark text-white">
      <div class= "container-fluid">
      
          <div class= "row">
              <div class="col">
                  <div class="jumbotron">
                      <h1 class="display-4">Bem vindo</h1>
                      <p class="lead">Curso Intensivo de Planejamento de Campanha</p>
                      <hr class="my-4">
                      <!-- 16:9 aspect ratio -->
                        <div id="videos" class="embed-responsive embed-responsive-16by9">
                          <!-- dimensões videos 270 x 150 -->
                          <!-- width="270" height="150" -->
                          <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/ZNNwyuxiL2A?enablejsapi=0&amp;autoplay=0&amp;modestbranding=1&amp;showinfo=0&amp;rel=0&amp;hd=1&amp;wmode=transparent&amp;enablejsapi=0" frameborder="0" allowfullscreen="allow"></iframe>
                            <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/M97JX3fDzNY?enablejsapi=0&amp;autoplay=0&amp;modestbranding=1&amp;showinfo=0&amp;rel=0&amp;hd=1&amp;wmode=transparent&amp;enablejsapi=0" frameborder="0" allowfullscreen="allow"></iframe>
                              <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/0pBFUxsdABs?enablejsapi=0&amp;autoplay=0&amp;modestbranding=1&amp;showinfo=0&amp;rel=0&amp;hd=1&amp;wmode=transparent&amp;enablejsapi=0" frameborder="0" allowfullscreen="allow"></iframe>
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AuWkmQzmQ0o" title="Como deixar os vídeos responsivos no site" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                      <hr class="my-4">
                      <p>Encontrou algum problema? Entre em contato conosco pelo WhatsApp.</p>
                      <p class="lead">
                      <!-- <a class="btn btn-primary btn-lg" href="formulario.php" role="button">Formulário</a>
                      <a class="btn btn-primary btn-lg" href="pesquisar.php" role="button">Pesquisar</a> -->
                      <a class="btn btn-danger btn-lg" href="../logout.php" role="button">Sair</a>
                      </p>
                  </div>
              </div>
          </div>
      </div> <!--Fechamento do background preto -->
    </div>

  

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
      -->
  </body>
</html>