<?php

// #74 Invert values

// Given a set of numbers, return the additive inverse of each. Each positive becomes negatives, and the negatives become positives.

// [1, 2, 3, 4, 5] --> [-1, -2, -3, -4, -5]
// [1, -2, 3, -4, 5] --> [-1, 2, -3, 4, -5]
// [] --> []

function invert(array $a): array {

    if(empty($a)){
        return [];
    }
    $new=[]; // 一開始我寫$new=""=>這是代表宣告空字串 但其實應該是宣告空陣列 請謹記
    foreach($a as $each){
        $new[]=-$each; //不需要寫判斷 每個數值加上-就是該數值的相反 簡潔
    }
    return $new;
}

// 使用array_map()
// function invert(array $a): array {
//     return array_map(function ($n) {return -$n;}, $a);
//   }

// array_map()：array_map 是一個 PHP 函數，用來對陣列中的每個元素執行指定的回呼函數，並將回呼函數的結果組成一個新陣列。

$a=[1, -2, 3, -4, 5];
print_r(invert($a));



?>