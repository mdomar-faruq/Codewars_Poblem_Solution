<?php
//Link:https://www.codewars.com/kata/54e6533c92449cc251001667/train/php

function uniqueInOrder($iterable)
{
 $ret = array();
 if (!empty($iterable)) {
  if (gettype($iterable) == gettype(array())) {
   $len = count($iterable);
   $array = $iterable;
  } else {
   $len = strlen($iterable);
   $array = str_split($iterable);
  }
 } else {
  return $ret;
 }

 $tem = $array[0];
 array_push($ret, $tem);
 for ($i = 0; $i < $len; $i++) {

  if ($tem != $array[$i]) {
   $tem = $array[$i];
   array_push($ret, $tem);
  }
 }
 return $ret;
}

var_dump(uniqueInOrder("AAAABBBHHHHHKKKK"));
var_dump(uniqueInOrder([1, 2, 3]));
var_dump(uniqueInOrder(""));

/* Output:
array(4) {
  [0]=>
  string(1) "A"
  [1]=>
  string(1) "B"
  [2]=>
  string(1) "H"
  [3]=>
  string(1) "K"
}
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
array(0) {
} */