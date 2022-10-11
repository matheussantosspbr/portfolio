<?php
class inicioController extends controller
{

  public function index()
  {
    /* =========================== Config =========================== */

    $config = new Config();
    $textoPagInicial = $config->config('textoPagInicial');
    $areaAtuaçao = $config->config('areaAtuaçao');

    $dados['textoPagInicial'] = $textoPagInicial;
    $dados['areaAtuaçao'] = $areaAtuaçao;
    $this->carregarTemplate('inicio', $dados);
  }
}
