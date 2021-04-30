<?php
//Link:https://www.codewars.com/kata/5667e8f4e3f572a8f2000039/train/php
//ord("a")=97
//chr(97)="a"
function accum($s)
{

 $k = strlen($s);
 $concatenetion = "";
 $array  =  str_split($s);
 for ($i = 0; $i < $k; $i++) {
  for ($j = 0; $j <= $i; $j++) {

   if ($j == 0) {
    $concatenetion .= strtoupper($array[$i]);
   } else {
    $concatenetion .= strtolower($array[$i]);
   }
  }
  if ($i < $k - 1) {
   $concatenetion .= "-";
  }
 }
 return $concatenetion;
}

var_dump(accum("abCd")); //"A-Bb-Ccc-Dddd"