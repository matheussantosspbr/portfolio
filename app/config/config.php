<?php

class Config
{
  public function config($v)
  {
    /* ===================== LINKS ========================*/ 

    $URL_BASE = 'https://matheussantos.herokuapp.com';

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

    $textoSobre = "
      Olá, Meu nome é Matheus Santos, tenho $idade anos e Moro na cidade
      de Mauá, no sudeste de São Paulo.
      <br />
      Amo a área de tecnologia, e por isso, de diversos tipos de
      serviços dentro desta incrivel área, optei em começar minha
      Graduação de
      <span>Análise e Desenvolvimento de Sistemas</span> em fevereiro
      de 2022.
      <br />
      Além disso, estou estudando aos poucos,
      <span>Design Gráfico</span>, com o curso
      <span>Design de Qualidade</span> da DDQ Ensinos, e o curso
      <span>DG Essential</span>
      do Thiago Rodrigues.
      <br />
      No momento estou buscando me aprofundar em
      <span>PHP e Laravel.</span> Pretendo daqui um tempo aprender mais sobre <span>Git, Python, React e TypeScript.</span>
    ";

    return $$v;
  }
}
