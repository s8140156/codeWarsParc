<?php

// #37 Grasshopper - Summation

// Write a program that finds the summation of every number from 1 to num. The number will always be a positive integer greater than 0. Your function only needs to return the result, what is shown between parentheses in the example below is how you reach that result and it's not part of it, see the sample tests.
// example: 2 -> 3 (1 + 2)


function summation($n) {
    // Your code here
    $sum=0; //要把$sum初始化在for外圈 不然每次迴圈都被重設為0 請記住
    for($i=1;$i<=$n;$i++){
        $sum+=$i;
    }
    return $sum;
  }

  echo summation(3);


// 簡潔寫法參考
//   function summation($n) {
//     return array_sum(range(1, $n));
//   }





?>