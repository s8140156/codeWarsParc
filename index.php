<?php

# 92 Round up to the next multiple of 5

// Given an integer as input, can you round it to the next (meaning, "greater than or equal") multiple of 5?
// ex.
// input:    output:
// 0    ->   0
// 2    ->   5
// 3    ->   5
// 12   ->   15
// 21   ->   25
// 30   ->   30
// -2   ->   0
// -5   ->   -5

function round_to_next_5(int $n): int{
    return ceil($n/5)*5;
}
// ceil()向上取整 ex. -1/5=-0.2=>向上取整是0喔


// 迴圈方式while()
// function round_to_next_5(int $n): int{
//     $i = $n;                        // 從原始數字開始
//     while ($i % 5 != 0) {          // 只要不是 5 的倍數，就一直加 1
//         $i++;                        // 不斷往上加 1，直到變成 5 的倍數
//     }
//     return $i;                     // 回傳第一個 >= n 的 5 的倍數
// }

echo round_to_next_5(-17);
