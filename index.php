<?php

include 'php/functions.php';

$musicas = obterMusicas();


?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MP3 DO PAI DA CRIANÇA</title>
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <div class="container">
    <div class="player">
      <h2>MP3 PHP</h2>
      <a class="rdc" href="https://github.com/GustaveGH">developed by GustaveGH</a>
      <a class="button" href="novaMusica.php">Adicionar Musica</a>

    </div>
    <div class="row">
      <?php foreach ($musicas as $musica) : ?>
        <div class="col col-3">
          <div class="card">
            <img src="<?= obterImagem($musica); ?>" alt="#">
            <div class="controls">
              <h3><?= $musica ?></h3>
              <audio controls>
                <source src="<?= obterAudio($musica) ?>" type="audio/mpeg">
              </audio>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  </div>

</body>

</html>