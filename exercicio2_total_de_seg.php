<?php
Print  " Quantidade de dias: ";
$dias     = (int) fgets (STDIN);
Print "quantidade de horas: ";
$horas    = (int) fgets (STDIN);
Print "quantidade de minutos: ";
$minutos  = (int) fgets (STDIN);
Print "quantidade de segundos: ";
$segundos = (int) fgets (STDIN);

$Cminutos   = $minutos * 60;
$Choras = $horas * (60**2);
$Cdias = ($dias * 24) * (60**2);
$resultado = $Cdias + $Choras + $Cminutos + $segundos;
print " resultado em segundos é: $resultado segundos. ";
