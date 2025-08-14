<?php

// # 93 Correct the mistakes of the character recognition software

// Character recognition software is widely used to digitise printed texts. Thus the texts can be edited, searched and stored on a computer.
// When documents (especially pretty old ones written with a typewriter), are digitised character recognition softwares often make mistakes.
// Your task is correct the errors in the digitised text. You only have to handle the following mistakes:
// S is misinterpreted as 5
// O is misinterpreted as 0
// I is misinterpreted as 1

function correct($string) {
  $result='';
  $map=['5'=>'S','0'=>'O','1'=>'I'];
  foreach(str_split($string) as $ch){
    $result .= isset($map[$ch])? $map[$ch] : $ch;
  }
  return $result;
}

// 使用str_replace() 語法：str_replace(find[要查找的值],replace[規定替換find中的值],string[規定被搜尋的字串],count)
// function correct($string) {
//   return str_replace(["5", "0", "1"], ["S", "O", "I"], $string);
// }


// 使用strtr() 語法：strtr(string,from,to) 或 strtr(string,array)
// function correct(string $string): string {
//   return strtr($string, "015", "OIS");
// }

// function correct($string) {
// $x=['5'=>'S','0'=>'O','1'=>'I'];
// return strtr($string, $x);
// }



$string='DUBL1N';

echo correct($string);


?>