<?php

// #51 Convert a string to an array

// Write a function to split a string and convert it into an array of words.
// "Robin Singh" ==> ["Robin", "Singh"]

function string_to_array($s){
    
    return explode(' ',$s);
  }

  $s="This is a book";
  print_r(string_to_array($s));

  // explode() 把字串轉成陣列




?>