<?php
class linksController extends controller
{

  public function index()
  {
    /* =========================== Config =========================== */

    $config = new Config();
    $areaAtuaçao = $config->config('areaAtuaçao');

    $dados['areaAtuaçao'] = $areaAtuaçao;

    $this->carregarTemplate('links', $dados);
  }
}
