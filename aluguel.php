<?php
print"quantos km foram percorridos?";
$km = (float) fgets (STDIN);
print"quantos dias o carro foi alugado?";
$dias = (float) fgets (STDIN);

$preçokm = $km * 0.15;
$preçodias = $dias * 60;
$preçototal= $preçokm + $preçodias;

print"valor final do aluguel:$preçototal";