<?php
$caminhoLogo = __DIR__ . '/../../assets/logo/logo.png';
$caminhoStyleBase = __DIR__ . '/../../assets/base/style.css';
$caminhoScriptBase = __DIR__ . '/../../assets/script/js/style.css';

$url = $_SERVER["REQUEST_URI"];

$url = explode('/', $url);

if (!empty($url[0])) {

  $style = $url[0];
  $styleRes = $url[0];
  array_shift($url);

  if (!empty($url[0])) {
    $style = $url[0];

    if (!empty($url[0])) {
      $style = $url[0];
    }

    array_shift($url);
  }
} else {
  $style = 'inicio';
}

if ($style == 'index') {
  $style = $styleRes;
}

$arq = $style . ".css";
$caminho = "/../assets/style/$arq";

if (!file_exists(__DIR__ . $caminho)) {
  $style = 'pageNotFound';
}

$script = $style;

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
  <link rel="stylesheet" href="<?php echo $caminhoStyle; ?>">
  <script src="<?php echo $caminhoScript; ?>"></script>
  <?php
  if ($style == 'pageNotFound') {
    $style = 'Page Not Found';
  } else if ($style == 'inicio') {
    $style = 'Início';
  } else if ($style == 'portifolio') {
    $style = 'Portifólio';
  } else if ($style == 'regra_de_3') {
    $style = 'Regra de 3';
  }
  ?>
  <title><?php echo mb_convert_case($style,  MB_CASE_TITLE); ?></title>
</head>

<body>

  <?php
  $this->carregarHeader();
  $this->carregarViewNoTemplate($nomeView, $dadosModel);
  $this->carregarFooter();
  ?>
</body>
<script src=<?php echo $caminhoScriptBase ?>></script>

</html>