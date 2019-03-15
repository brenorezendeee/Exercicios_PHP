<?php
print"numero em dias:";
$dias = (int) fgets (STDIN);

print"numero em horas:";
$horas = (int) fgets (STDIN);

print"numero em minutos:";
$minutos = (int) fgets (STDIN);

print"numero em segundos:";
$segundos = (int) fgets (STDIN);

$Sdias = ($dias*24) * (60*60);
$Shoras = $horas*(60**2);
$Sminutos = $minutos*60;
$Ssegundos=$Sdias+$Shoras+$Sminutos+$segundos;

print"Resultado final em segundos é:$Ssegundos";
