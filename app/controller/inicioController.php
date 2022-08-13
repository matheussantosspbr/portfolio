<?php
class inicioController extends controller
{

  public function index()
  {
    /*
    Chamar um Model
    Chamar View
    $u = new usuario();
    $dados = $u->getDadosUsuario();*/
    $dados['nome'] = 'Matheus';
    $dados['idade'] = 17;
    $this->carregarTemplate('inicio');
  }
}
