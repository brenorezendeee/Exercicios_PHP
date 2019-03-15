<?php

print "Digite o valor da mercadoria: ";
$valorm = (float) fgets (STDIN);

print "\n Digite o percentual de desconto: ";
$desconto         = (float) fgets (STDIN);

$vdesconto = $valorm * ($desconto /100);
$final    = $valorm- $vdesconto; 

print "valor final da mercadoria com o desconto é : $final  ";
