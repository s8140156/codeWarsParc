<?php

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