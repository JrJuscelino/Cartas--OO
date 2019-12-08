<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cartas - OO</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    "Testando"

    <?php 
        include('classes.php'); 
        echo " <br <br> Batalha entre ", $cartas[0]->nome, " e ", $cartas[1]->nome, ": ", $batalha[0]->vencedor();
    ?>
  </body>
</html>