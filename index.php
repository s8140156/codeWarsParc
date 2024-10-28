<?php

// #70 Reversing Words in a String

// You need to write a function that reverses the words in a given string. Words are always separated by a single space.
// As the input may have trailing spaces, you will also need to ignore unneccesary whitespace.

// ex. "Hello World" --> "World Hello"

function reverse($string) {
    // Your code here
    $words=explode(" ",$string);
    $result=array_reverse($words);
    return implode(" ",$result);
  }

  // 超簡潔一行寫法
//   function reverse($string) {
//     return implode(" ", array_reverse(explode(" ", $string)));
//   }

  $string="Hello World";
  echo reverse($string);






?>