<?php
class sobreController extends controller
{

  public function index()
  {
    /* =========================== Config =========================== */

    $config = new Config();
    $textoSobre = $config->config('textoSobre');
    $URL_BASE = $config->config('URL_BASE');

    $dados['textoSobre'] = $textoSobre;
    $dado['URL_BASE'] = $URL_BASE;
    
    $this->carregarTemplate('sobre', $dados);
  }
}
