<?php

/* ===================== Calcular a diferença da data atual com a minha data de nascimento para ter minha idade ========================*/

$data_inicio = new DateTime("2004-09-02");
$data_fim = new DateTime();
$dateInterval = $data_inicio->diff($data_fim);
$years = $dateInterval->y;
