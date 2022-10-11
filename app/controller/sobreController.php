<?php
class sobreController extends controller
{

  public function index()
  {
    /* =========================== Config =========================== */

    $config = new Config();
    $textoSobre = $config->config('textoSobre');

    $dados['textoSobre'] = $textoSobre;

    $this->carregarTemplate('sobre', $dados);
  }
}
