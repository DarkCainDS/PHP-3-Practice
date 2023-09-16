<?php
$valorA = true;
$valorB = false;

$result = $valorA && $valorB;
echo "$result \n";
var_dump($result);

$resultB = $valorA and $valorB;
var_dump($resultB);

$resultC = $valorA or $valorB;
var_dump($resultC);

$resultD = $valorA || $valorB;
var_dump($resultD);

$resultE = $valorA xor $valorB;
var_dump($resultE);

 ?>