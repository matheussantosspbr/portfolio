<?php
$caminhoLogo = __DIR__ . '/../../assets/logo/logo.png';
$caminhoStyleBase = __DIR__ . '/../../assets/base/style.css';
$caminhoScriptBase = __DIR__ . '/../../assets/base/script.js';

$url = $_SERVER["REQUEST_URI"];

$url = explode('/', $url);
array_shift($url);

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
$titulo = $style;

$caminhoScript = __DIR__ . '/../../assets/script/js/' . $script . '.js';
$caminhoStyle = __DIR__ . '/../../assets/style/' . $style . '.css';

/* ===================== Calcular a diferença da data atual com a minha data de nascimento para ter minha idade ========================*/

$data_inicio = new DateTime("2004-09-02");
$data_fim = new DateTime();
$dateInterval = $data_inicio->diff($data_fim);
$years = $dateInterval->y;
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
  <title></title>
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