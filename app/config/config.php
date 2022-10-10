<?php

class Config
{
  public function config($v)
  {
    /* ===================== IDADE ========================*/

    $nascimento = new DateTime("2004-09-02");
    $dataAtual = new DateTime();
    $dateInterval = $nascimento->diff($dataAtual);
    $idade = $dateInterval->y;
    return $$v;
  }
}
