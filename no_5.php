<?php

// #5 Vowel Count

// Return the number (count) of vowels in the given string.
// We will consider a, e, i, o, u as vowels for this Kata (but not y).
// The input string will only consist of lower case letters and/or spaces.

function getCount($str) {
    $vowelsCount = 0;
    $characters=str_split($str);
    $counts=array_count_values($characters);

    foreach($counts as $cha=>$count){
        if(isset($count)){
            switch($cha){
                case 'a':
                $vowelsCount+=$count;
                break;
                case 'e':
                $vowelsCount+=$count;
                break;
                case 'i':
                $vowelsCount+=$count;
                break;
                case 'o':
                $vowelsCount+=$count;
                break;
                case 'u':
                $vowelsCount+=$count;
                break;
            }
        }
    }
    return $vowelsCount;
  }

  // function getCount($str) {
  //   $vowelsCount = 0;
  //   $vowels = ['a', 'e', 'i', 'o', 'u'];
  //   // enter your magic here
  //   foreach($vowels as $vowel) {
  //     $vowelsCount += substr_count($str, $vowel);
  //   }
    
    
  //   return $vowelsCount;
  // }

  // function getCount($str) {
  //   $vowelsCount = 0;
  //   $vowelArr = ['a','e','i','o','u'];
  //   $strSplit = str_split($str,1);
    
  //   for( $i=0; $i < count($strSplit); $i++){
  //     if( in_array($strSplit[$i], $vowelArr)) 
  //       $vowelsCount++;
  //   }
    
  //   return $vowelsCount;
  // }

  

$str= "a quick brown fox jumps over a lazy dog";
echo getCount($str);



// $string = "a quick brown fox jumps over a lazy dog";
// $characters = str_split($string); //字串轉換為字符陣列
// $counts = array_count_values($characters); //計算陣列中每個元素出現的次數
// print_r($counts);




?>