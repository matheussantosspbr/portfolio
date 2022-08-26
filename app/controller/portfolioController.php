<?php
class portifolioController extends controller
{

  public function index()
  {
    $this->carregarTemplate('portifolio');
  }

  public function regra_de_3()
  {
    $this->carregarTemplate('regraDe3');
  }
}
