<?php

// #73 Simple multiplication

// This kata is about multiplying a given number by eight if it is an even number and by nine otherwise.

function simpleMultiplication($number) {
    // your code goes here
    if($number%2==0){
        return $number*8;
    }else{
        return $number*9;
    }
  }

  // 下次嘗試用3元思考
//   function simpleMultiplication($number) {
//     return ($number % 2 == 0) ? $number * 8 : $number * 9;
//   }

  echo simpleMultiplication(7);


?>