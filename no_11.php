<?php

// #11 Reverse words

// Complete the function that accepts a string parameter, and reverses each word in the string. All spaces in the string should be retained.

function reverseWords($str) {

    $words=explode(' ',$str);
    $reverseWords=array_map('strrev',$words);
    $reverseStr=implode(' ',$reverseWords);
  
    return $reverseStr;
  }

  $input='This is a pen';
  echo reverseWords($input)."<br>";



?>