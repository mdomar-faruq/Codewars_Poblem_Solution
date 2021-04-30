<?php
//https://www.codewars.com/kata/55fd2d567d94ac3bc9000064/php
//Row sum Odd Number with Triangle

function rowSumOddNumbers($n)
{
 if ($n == 1) {
  return $n;
 } else {
  $temp = 1;

  for ($i = 1; $i < $n; $i++) {
   $sum = 0;
   for ($j = 0; $j <= $i; $j++) {
    $temp += 2; //Odd number
    $sum += $temp;
   }
  }
  return $sum;
 }
}

var_dump(rowSumOddNumbers(1)); //1
var_dump(rowSumOddNumbers(2)); //3+5=8
var_dump(rowSumOddNumbers(3)); //7+9+11=27