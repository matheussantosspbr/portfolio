<?php
class portfolioController extends controller
{

  public function index()
  { 
    /* =========================== Config =========================== */

    $config = new Config();
    $URL_BASE = $config->config('URL_BASE');

    $dado['URL_BASE'] = $URL_BASE;

    $this->carregarTemplate('portfolio', $dado);
  }

  public function regra_de_3()
  {
    $this->carregarTemplate('regraDe3');
  }
}
