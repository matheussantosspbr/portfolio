<?php

class controller
{
  public $dados;

  public function carregarTemplate($nomeView, $dadosModel = array())
  {
    $this->dados = $dadosModel;
    require '/xampp/htdocs/www.matheussantosdev.com/app/view/template.php';
  }

  public function carregarHeader()
  {
    require '/xampp/htdocs/www.matheussantosdev.com/app/view/header.php';
  }

  public function carregarViewNoTemplate($nomeView, $dadosModel = array())
  {
    extract($dadosModel);
    require "/xampp/htdocs/www.matheussantosdev.com/app/view/$nomeView.php";
  }

  public function carregarFooter()
  {
    require '/xampp/htdocs/www.matheussantosdev.com/app/view/footer.php';
  }
}
