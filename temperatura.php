<?php
print"digite a temperatura em celsius:";
$celsius = (float) fgets(STDIN);

$fah = 9 * $celsius / 5+32;

print "sua temperatura em fahrenheit é :$fah";