<?php
class portfolioController extends controller
{

  public function index()
  {
    $this->carregarTemplate('portfolio');
  }

  public function regra_de_3()
  {
    $this->carregarTemplate('regraDe3');
  }
}
