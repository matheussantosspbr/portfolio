<?php
$caminhoLogo = __DIR__ . '/../../assets/logo/logo.png';
$caminhoStyle = __DIR__ . '/../../assets/base/style.css';
// 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#0b0f13" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#0b0f13" />
  <meta name="msapplication-navbutton-color" content="#0b0f13" />
  <link rel="shortcut icon" href=<?php echo $caminhoLogo; ?> />
  <link rel="stylesheet" href=<?php echo $caminhoStyle; ?>>
  <?php
  $this->carregarHeader();
  $this->carregarViewNoTemplate($nomeView, $dadosModel);
  $this->carregarFooter();
  ?>
  <script src="../assets/base/script.js"></script>
  </body>

</html>