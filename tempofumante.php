<?php
print"Quantos cigarros por dia você fuma?";
$diafumados = (int) fgets (STDIN);

print"A quantos anos você fuma?";
$anos = (int) fgets (STDIN);

$vida = ((($diafumados*10) *60) *24) + ($anos*365);
print"você perdeu um total de $vida de dias.";