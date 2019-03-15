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
 # galao
$galao_preço=25;
$galões_rendimento= 21.6;#6 * 3.6
 print"\nquantos metros quadrados serão pintados?\n";
 $areapintar = (float) fgets(STDIN);
$galões_quantidade= ceil($areapintar/$galões_rendimento);
$galões_custo= $galões_quantidade * $galao_preço;
print"será necessario = $galões_quantidade galões ao custo de =R$$galões_custo"; 
//--------------------------------------------------------------------------------------
#lata
$lata_preço=80;
$lata_rendimento=108;

#galao
$galao_preço=25;
$galões_rendimento=21.6;#6 * 3.6

$Mquadrados = 1.1;

//$area_nova=$areapintar + ($areapintar * 0.10);
print "quantos metros quadrados serão pintados?\n";
$Mquadrados= fgets(STDIN);

print"\n";

$quantidade_lata=(int)($Mquadrados/$lata_rendimento);
$faltou = $Mquadrados % $lata_rendimento;
$quantidade_galao=ceil($faltou/$galões_rendimento);
$preco_lata=$quantidade_lata * 80;
$preço_galao=$quantidade_galao * 25;
$preço_total=$preco_lata + $preço_galao;

Print"Voce ira utilizar $quantidade_lata latas e $quantidade_galao galões, preço total sera de: \n RS $preço_total.";



