<?php
function nbYear($p0, $percent, $aug, $p)
{
 $n = 0;
 /*  for ($i = 1; $population <= $p0; $i++) {
  $incrase = $p0 * ($percent / 100);
  $population = $p0 + $incrase + $aug;
  $n += $i;
 } */

 while ($p0 < $p) {
  $incrase = $p0 * ($percent / 100); //20
  $population = $p0 + $incrase + $aug; //1070
  $p0 = $population;
  $n++;
 }
 return $n;
}

var_dump(nbYear(1500000, 2.5, 10000, 2000000));//output:10