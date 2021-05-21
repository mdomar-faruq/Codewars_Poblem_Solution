<?php
//https://www.codewars.com/kata/5467e4d82edf8bbf40000155
//Descending Order
function descendingOrder(int $n): int
{
 //Intigar to Array
 $array  = array_map('intval', str_split($n));
 rsort($array); //decending odder sorting
 //array to integar
 return intval(implode("", $array));
}

var_dump(descendingOrder(1234556789)); //int(9876554321)
var_dump(descendingOrder(0)); //int(0)