<?php
//Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros
//quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros
//quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros,
///que custam R$ 25,00. Informe ao usuário as quantidades de tinta a serem compradas e os respectivos
//preços em 3 situações:
//a. comprar apenas latas de 18 litros;
//b. comprar apenas galões de 3,6 litros;
//c. misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre
//arredonde os valores para cima, isto é, considere latas cheias. 


#lata
$lata_preço=80;
$lata_rendimento=108;

 print"quantos metros quadrados serão pintados?";
 $area_para_pintar = (float) fgets(STDIN);

$latas_quantidade= ceil($area_para_pintar/$lata_rendimento);
$lata_custo= $latas_quantidade * $lata_preço;

print"\nserá necessario = $latas_quantidade latas ao custo de =R$$lata_custo\n"; 
 //B-comprar apenas galões

//---------------------------------------------------------------------------------------

 # galao
$galao_preço=25;
$galões_rendimento= 21.6;#6 * 3.6

 print"\nquantos metros quadrados serão pintados?\n";
 $areapintar = (float) fgets(STDIN);

$galões_quantidade= ceil($areapintar/$galões_rendimento);
$galões_custo= $galões_quantidade * $galao_preço;

print"será necessario = $galões_quantidade galões ao custo de =R$$galões_custo"; 

//--------------------------------------------------------------------------------------
//$area_nova=$areapintar + ($areapintar * 0.10);
print "latas e galões:\n";


