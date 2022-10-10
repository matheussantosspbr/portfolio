<?php
$caminhoLogo = __DIR__ . '/../../assets/logo/logo.png';
$caminhoStyleBase = __DIR__ . '/../../assets/base/style.css';
$caminhoScriptBase = __DIR__ . '/../../assets/base/script.js';

if ($nomeView == 'pageNotFound') {
  $titulo = 'Page Not Found';
} else if ($nomeView == 'inicio') {
  $titulo = 'Início';
} else if ($nomeView == 'portfolio') {
  $titulo = 'Portfólio';
} else {
  $titulo = $nomeView;
}

$style = $nomeView;
$script = $nomeView;
$titulo = ucwords($titulo);

$caminhoScript = __DIR__ . '/../../assets/script/js/' . $script . '.js';
$caminhoStyle = __DIR__ . '/../../assets/style/' . $style . '.css';
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
  <link rel="stylesheet" href=<?php echo $caminhoStyleBase; ?>>
  <link rel="stylesheet" href=<?php echo $caminhoStyle; ?>>
  <title><?php echo $titulo; ?></title>
</head>

<body>
  <?php
  $this->carregarHeader();
  $this->carregarViewNoTemplate($nomeView, $dadosModel);
  $this->carregarFooter();
  ?>
  <script src=<?php echo $caminhoScript; ?>></script>
  <script src=<?php echo $caminhoScriptBase ?>></script>
</body>

</html>