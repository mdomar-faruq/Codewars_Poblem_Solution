<?php
$a = (int)fgets(STDIN);

/* //integar to string
var_dump(strval($a));  */
function test(int $a)
{
 //integar value to array
 $array  = array_map('intval', str_split($a));
 $C = count($array);
 $sum = 0;
 for ($i = 0; $i < $C; $i++) {
  $sum += pow($array[$i], $C);
 }
 echo "sum=$sum\n";
 if ($sum == $a) {
  return true;
 } else {
  return false;
 }
}

var_dump(test($a));