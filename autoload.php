<?php
spl_autoload_register(function ($nome_arquivo) {
  if (file_exists('app/controller/' . $nome_arquivo . '.php')) {
    require 'app/controller/' . $nome_arquivo . '.php';
  } elseif (file_exists('app/model/' . $nome_arquivo . '.php')) {
    require 'app/model/' . $nome_arquivo . '.php';
  } elseif (file_exists('app/core/' . $nome_arquivo . '.php')) {
    require 'app/core/' . $nome_arquivo . '.php';
  }
});
