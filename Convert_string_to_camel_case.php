<?php 

/*
https://www.codewars.com/kata/517abf86da9663f1d2000003/train/php
Convert string to camel case
Examples
"the-stealth-warrior" gets converted to "theStealthWarrior"
"The_Stealth_Warrior" gets converted to "TheStealthWarrior"

*/
function toCamelCase($str){


 $sentence=str_replace(['-','_']," ",$str);

  if(ucfirst($str)!=$str){
  $first_word_lower=str_replace(" ","",ucwords(strtolower($sentence))) ;
   return lcfirst($first_word_lower);
  }
  else{
   return str_replace(" ","",ucwords(strtolower($sentence))) ;
  }

}

var_dump(toCamelCase("the_stealth-Warrior")); //"theStealthWarrior"

?>