<?php

// #35 Sum of odd numbers

// Given the triangle of consecutive odd numbers:
// 1
// 3     5
// 7     9    11
// 13    15    17    19
// 21    23    25    27    29
// ...

// Calculate the sum of the numbers in the nth row of this triangle (starting at index 1) e.g.: (Input --> Output)

function rowSumOddNumbers($n) {
    // your code here
    $oddNum=$n*($n-1)+1;
    $sum=0;
    for($i=0;$i<$n;$i++){
        $sum+=$oddNum+($i*2); //注意是$i*2 因為都是從該迴圈去累加
    }
    return $sum;
  }

  // “觀察”奇數金字塔 會發現每行$n的三次方就是該行的奇數總和
//   function rowSumOddNumbers($n) {
//     // your code here
//     return $n**3;
//     or return $n*$n*$n;
//   }

  echo rowSumOddNumbers(3);




?>