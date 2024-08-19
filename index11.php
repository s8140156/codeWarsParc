<?php

// Binary Addition

// Implement a function that adds two numbers together and returns their sum in binary. The conversion can be done before, or after the addition.
// The binary number returned should be a string.
// Examples:(Input1, Input2 --> Output (explanation)))


function add_binary($a, $b) {
    $binary=decbin($a+$b);
    return $binary;
  }

  //decbin()是將一般整數轉換二進位數 資料類型：字串

  $a=10;
  $b=11;

  echo $binary=add_binary($a,$b);
  // echo gettype($binary);
  



?>