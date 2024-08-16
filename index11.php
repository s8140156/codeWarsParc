<?php

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