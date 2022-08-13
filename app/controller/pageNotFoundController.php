<?php
class pageNotFoundController extends controller
{

  public function index()
  {
    $this->carregarTemplate('pageNotFound');
  }
}
