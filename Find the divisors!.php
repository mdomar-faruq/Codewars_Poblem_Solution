<?php
$integer = (int)fgets(STDIN);

function printDivisors($integer)
{
 $a = array();
 $tem = 0;
 for ($i = 2; $i <= $integer - 1; $i++) {
  if ($integer % $i == 0) {
   array_push($a, $i);
   $tem = 1;
  }
 }
 if ($tem == 0) {
  return "$integer is prime";
 } else {
  return $a;
 }
}

// Driver Code
//echo "\n";
var_dump(printDivisors($integer));