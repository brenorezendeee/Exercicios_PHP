
<?php
print" Digite o valor do seu salario inicial: ";
   $salarioinicial  = (float) fgets (STDIN);
print "digite a porcentagem:";
   $porcentagem= (float) fgets (STDIN);

$aumento = $salarioinicial * ($porcentagem / 100);
$salariofinal = $salarioinicial + $aumento; 
 
print "seu salario final com a porcentagem é:$salariofinal";