<?php

// #82 Sum Arrays
// Write a function that takes an array of numbers and returns the sum of the numbers. The numbers can be negative or non-integer. If the array does not contain any numbers then you should return 0.

function sum(array $a): float {
  if(empty($a)){
    return 0;
  }else{
    $sum=0; // 永遠記得$sum要初始化(宣告)
    foreach($a as $n){
        $sum +=$n;
    }
    return $sum;
  }
}

// 使用array_sum() 在陣列為空時也會自動回傳 0，所以你不需要手動判斷是否為空
// function sum(array $a): float {
//   return array_sum($a);
// }

// 使用三元運算式
// function sum(array $a): float {
//   return ($a) ? array_sum($a): 0;
// }


// $a=[];
// $a=[4,3,2,1];
$a=[4,3,2,-99];
echo sum($a);

?>