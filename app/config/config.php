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

    /* ===================== Textos ========================*/

    $areaAtuaçao = 'Dev. Full-Stack';

    $textoPagInicial = "
    Olá, Meu nome é Matheus Santos, tenho $idade anos e Moro na cidade
    de Mauá, no sudeste de São Paulo.
    <br />
    Ja fiz curso de <span>Auxiliar de Escritório</span> pela Senac,
    Já fiz curso de <span>Inglês</span> pela Tibtis, entre outros
    cursos.
    <br />
    Amo a área de tecnologia, e por isso, de diversos tipos de
    serviços dentro dessa área, optei em começar minha Graduação de
    <span>Análise e Desenvolvimento de Sistemas</span> em fevereiro
    de 2022.
    ";

    return $$v;
  }
}
