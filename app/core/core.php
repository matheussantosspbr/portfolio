<?php

class core
{
  public function __construct()
  {
    $this->url();
  }

  public function url()
  {
    if (isset($_GET['url'])) {
      $url = $_GET['url'];
    }

    if (!empty($url)) {
      $url = explode('/', $url);

      $controller = $url[0] . 'Controller'; //classe -- noticia
      array_shift($url);

      if (isset($url[0]) && !empty($url[0])) {
        $metodo = $url[0];
        array_shift($url);
      } else {
        $metodo = 'index';
      }

      if (count($url) > 0) {
        $parametros = $url[0];
      } else {
        $parametros = '';
      }
    } else {
      $controller = 'inicioController';
      $metodo = 'index';
      $parametros = '';
    }

    $arq = $controller . ".php";
    $caminho = "/xampp/htdocs/www.matheussantosdev.com/app/controller/$arq";

    if (!file_exists($caminho) || !method_exists($controller, $metodo)) {
      $controller = 'pageNotFoundController';
      $metodo = 'index';
      $parametros = '';
    }


    $c = new $controller;

    call_user_func_array(array($c, $metodo), array($parametros));
  }
}
