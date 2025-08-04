<?php

// # 90 Beginner Series #3 Sum of Numbers

// Given two integers a and b, which can be positive or negative, find the sum of all the integers between and including them and return it. If the two numbers are equal return a or b.
// Ex.
// (1, 0) --> 1 (1 + 0 = 1)
// (1, 2) --> 3 (1 + 2 = 3)
// (0, 1) --> 1 (0 + 1 = 1)
// (1, 1) --> 1 (1 since both are same)
// (-1, 0) --> -1 (-1 + 0 = -1)
// (-1, 2) --> 2 (-1 + 0 + 1 + 2 = 2)


function getSum(int $a, int $b): int{
    if($a==$b){
        return $a;
    }
    $min=min($a,$b);
    $max=max($a,$b);
    return array_sum(range($min,$max));
}

// 簡潔版本
// function getSum(int $a, int $b): int{
//   return $a === $b ? $a : array_sum(range($a, $b));
// }

// 遞迴版本
// function getSum(int $a, int $b): int{
//   $max = max($a,$b);
//   $min = min($a,$b);
//   $sum = 0;
    
//   for ($i = $min;$i<=$max;$i++){
//     $sum += $i;
    
//   }return $sum;
// }

echo getSum(6,-1);



?>