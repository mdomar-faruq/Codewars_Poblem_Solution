<?php
//link:https://www.codewars.com/kata/5266876b8f4bf2da9b000362/train/php
//Who likes it?

function likes($names)
{
 $tem = array();
 $len = count($names);
 switch ($len) {
  case 0:
   return "no one likes this";//null
   break;
  case 1:
   array_push($tem, $names[0]);
   return implode("", $tem) . " likes this";
   break;

  case 2:
   array_push($tem, $names[0]);
   array_push($tem, " and ");
   array_push($tem, $names[1]);
   return implode("", $tem) . " like this";
   break;

  case 3:
   array_push($tem, $names[0]);
   array_push($tem, ", ");
   array_push($tem, $names[1]);
   array_push($tem, " and ");
   array_push($tem, $names[2]);
   return implode("", $tem) . " like this";
   break;

  default:
   array_push($tem, $names[0]);
   array_push($tem, ", ");
   array_push($tem, $names[1]);
   array_push($tem, " and ");
   $more[0] = $len - 2;
   array_push($tem, $more[0]);
   return implode("", $tem) . " others like this";
 }
}

var_dump(likes([])); //"no one likes this"
var_dump(likes(["Alex"])); //"Alex likes this"
var_dump(likes(["Alex", "Jacob"])); //"Alex and Jacob like this"
var_dump(likes(["Alex", "Jacob", "Mark"])); //"Alex, Jacob and Mark like this" 
var_dump(likes(["Alex", "Jacob", "Mark", "Max"]));//"Alex, Jacob and 2 others like this"