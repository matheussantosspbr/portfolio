<?php

class controller
{
  public $dados;

  public function carregarTemplate($nomeView, $dadosModel = array())
  {
    $this->dados = $dadosModel;
    if ($nomeView == 'links') {
      require __DIR__ . '/../view/templateLinks.php';
    } else {
      require __DIR__ . '/../view/template.php';
    }
  }

  public function carregarHeader()
  {
    require __DIR__ . '/../view/header.php';
  }

  public function carregarViewNoTemplate($nomeView, $dadosModel = array())
  {
    extract($dadosModel);
    require  __DIR__ . '/../view/' . $nomeView . '.php';
  }

  public function carregarFooter()
  {
    require  __DIR__ . '/../view/footer.php';
  }
}
