<?php
//https://www.codewars.com/kata/525f50e3b73515a6db000b83/train/php
//Create Phone Number

function createPhoneNumber($numbersArray)
{
 $add = array();
 $len = count($numbersArray);
 for ($i = 0; $i < $len; $i++) {
  if ($i < 3) {
   if ($i == 0) {
    array_push($add, "(");
   }
   array_push($add, $numbersArray[$i]);
   if ($i == 2) {
    array_push($add, ")");
   }
  }

  if ($i > 2) {
   if ($i == 3) {
    array_push($add, " ");
   }
   array_push($add, $numbersArray[$i]);
   if ($i == 5) {
    array_push($add, "-");
   }
  }
 }
 return implode("", $add); //array to string
}

var_dump(createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0])); //"(123) 456-7890"