<?php
/*https://www.codewars.com/kata/523a86aa4230ebb5420001e1/train/php
What is an anagram? Well, two words are anagrams of each other if they both contain the same letters. For example:

'abba' & 'baab' == true

'abba' & 'bbaa' == true

'abba' & 'abbba' == false

'abba' & 'abca' == false

*/

function anagrams(string $word, array $words)
{

 $anagram = array();
 $tem1 = str_split($word);

 for ($i = 0; $i < count($words); $i++) {

  $tem2 = str_split($words[$i]);

  if (sort($tem1) === sort($tem2)  && count($tem1)==count($tem2) && $tem1==$tem2) {
   array_push($anagram, $words[$i]);
  }
 }

 return $anagram;
}

var_dump(anagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']));  //aabb,bbaa