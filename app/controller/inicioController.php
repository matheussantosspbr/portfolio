<?php
class inicioController extends controller
{

  public function index()
  {
    /* =========================== Config =========================== */

    $config = new Config();
    $textoPagInicial = $config->config('textoPagInicial');
    $areaAtuaçao = $config->config('areaAtuaçao');
    $URL_BASE = $config->config('URL_BASE');

    $dados['textoPagInicial'] = $textoPagInicial;
    $dados['areaAtuaçao'] = $areaAtuaçao;
    $dado['URL_BASE'] = $URL_BASE;
    $this->carregarTemplate('inicio', $dados);
  }
}
