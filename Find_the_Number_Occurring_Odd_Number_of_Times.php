<?php
//https://www.codewars.com/kata/54da5a58ea159efa38000836
//Find the Number Occurring Odd Number of Times

function findIt(array $seq): int
{
 $count = 0;
 for ($i = 0; $i < count($seq); $i++) {
  for ($j = 0; $j < count($seq); $j++) {
   if ($seq[$j] == $seq[$i]) {
    $count++;
   }
  }
  if ($count % 2 != 0) {
   // Occurring Odd Number of Times
   return $seq[$i];
  }
 }
}
var_dump(findIt([1, 10, 5, 10, 1])); //5 
var_dump(findIt([1, 1, 2, -2, 5, 2, 4, 4, -1, -2, 5])); //-1