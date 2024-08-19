<?php

// Square(n) Sum

// Complete the square sum function so that it squares each number passed into it and then sums the results together.
// For example, for [1,2,2] it should return 9 because 1^2+2^2+2^2=9

function square_sum($numbers) : int {
    $sum=0;
    foreach($numbers as $num){
        $square=$num ** 2;
        $sum+=$square;
    }
    return $sum;
  }

  $array=[1,1,1,1,1];

  echo square_sum($array);


  //更直覺的答案
//   function square_sum(array $numbers) : int {
//     // Write your code here...
//     $sum = 0;
//     foreach($numbers as $number) {
//       $sum += $number * $number;
//     }
    
//     return $sum;
//   }



?>