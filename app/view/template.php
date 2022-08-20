<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#0b0f13" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#0b0f13" />
  <meta name="msapplication-navbutton-color" content="#0b0f13" />
  <link rel="shortcut icon" href=<?php echo __DIR__ . "/../assets/logo/logo.png" ?> />
  <link rel="stylesheet" href=<?php echo __DIR__ . "/../assets/base/style.css" ?>>
  <?php
  require __DIR__ . '/../../autoload.php';

  $c = new $controller;
  $c->carregarHeader();
  $c->carregarViewNoTemplate($nomeView, $dadosModel);
  $c->carregarFooter();
  ?>
  <script src="../assets/base/script.js"></script>
  </body>

</html>