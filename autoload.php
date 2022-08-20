<?php
spl_autoload_register(function ($nome_arquivo) {
  if (file_exists(__DIR__ . 'app/controller/' . $nome_arquivo . '.php')) {
    require __DIR__ . 'app/controller/' . $nome_arquivo . '.php';
  } elseif (file_exists(__DIR__ . 'app/model/' . $nome_arquivo . '.php')) {
    require __DIR__ . 'app/model/' . $nome_arquivo . '.php';
  } elseif (file_exists(__DIR__ . 'app/core/' . $nome_arquivo . '.php')) {
    require __DIR__ . 'app/core/' . $nome_arquivo . '.php';
  }
});
