<?php
class linksController extends controller
{

  public function index()
  {
    /* =========================== Config =========================== */

    $config = new Config();
    $areaAtuaçao = $config->config('areaAtuaçao');
    $URL_BASE = $config->config('URL_BASE');

    $dados['areaAtuaçao'] = $areaAtuaçao;
    $dado['URL_BASE'] = $URL_BASE;
    $this->carregarTemplate('links', $dados);
  }
}
