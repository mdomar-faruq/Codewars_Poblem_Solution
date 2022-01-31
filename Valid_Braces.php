<?php 
/*    
https://www.codewars.com/kata/5277c8a221e209d3f6000b56/train/php
Valid Braces
Examples
"(){}[]"   =>  True
"([{}])"   =>  True
"(}"       =>  False
"[(])"     =>  False
"[({})](]" =>  False
"}()[]"    =>  false

*/
function validBraces($braces){
 
  $store = array();
  $brace=str_split($braces);

    if(empty($braces)){ 
    return "please, take input";
    }
    elseif ($brace[0]== ")" || $brace[0]== "}" || $brace[0]== "]"){
    return false;
   }

  for($i=0;$i<count($brace);$i++){

   switch($brace[$i]){

   case "(": 
            array_push($store,$brace[$i]); break;
   case "{": 
            array_push($store,$brace[$i]); break;
   case "[": 
            array_push($store,$brace[$i]); break;
            

     case ")":
             $top=count($store)-1; // store previous index number
             if($store[$top] == "{" || $store[$top]=="["){ //check previous index not ( -> false
             return false;
              break;
             }
              array_pop($store);
               break;

     case "}":
             $top=count($store)-1; // store previous index number
             if($store[$top]=="(" || $store[$top]=="["){ //check previous index not { -> false
             return false; break;
             }
             array_pop($store);
             break;

     case "]":
             $top=count($store)-1; // store previous index number
             if($store[$top]=="(" || $store[$top]=="{"){ //check previous index not [ -> false
             return false; break;   
             }
              array_pop($store);
              break;
            

   }
  }

//if store empty ->true, isnot false
 return $store? false : true;


}

var_dump(validBraces("([{}])")); //true

?>