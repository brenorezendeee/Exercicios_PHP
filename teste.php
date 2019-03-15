<?php
print"qual ira ser a distância percorrida?";
  $distancia = (float) fgets(STDIN);

print"qual ira ser a velocidade média esperada?";
  $velo = (float) fgets(STDIN);

  $tempo = ($distancia/$velo);

print"o tempo da sua viagem é:$tempo";