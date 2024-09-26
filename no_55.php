<?php

// #55 Tribonacci Sequence(類似費波那契數)

//  if we are to start our Tribonacci sequence with [1, 1, 1] as a starting input (AKA signature), we have this sequence:
//  [1, 1 ,1, 3, 5, 9, 17, 31, ...]
//  But what if we started with [0, 0, 1] as a signature? As starting with [0, 1] instead of [1, 1] basically shifts the common Fibonacci sequence by once place, you may be tempted to think that we would get the same sequence shifted by 2 places, but that is not the case and we would get:
// [0, 0, 1, 1, 2, 4, 7, 13, 24, ...]

// Signature will always contain 3 numbers; n will always be a non-negative number; if n == 0, then return an empty array (except in C return NULL) and be ready for anything else which is not clearly specified ;)


function tribonacci($signature, $n) {
    if($n<=3){
        return array_slice($signature,0,$n);
        // array_slice(): 0=>從索引0開始取, 取$n個
    }

    $result=$signature;  // 用簽名初始化結果陣列

    while(count($result)<$n){
        $nextValue=array_sum(array_slice($result,-3));
        // array_sum() *-3=>提取當前序列中的最後三個數來生成下一個數
        $result[]=$nextValue;
    }
    return $result;
}

// 使用 while 是根據結果陣列的長度來控制迴圈的終止。當迭代條件根據外部因素或動態變量來決定時，或者條件比較複雜，無法簡單預測迭代次數的情況下
// 使用 for 則是直接根據迴圈的次數來進行控制;清楚知道需要迭代多少次，或者可以在每次迭代時依照固定的步驟來改變狀態的情況下

// 使用for()解法 看起來最後開始減
// function tribonacci(array $signature, int $n): array {
//     for ($i = $n - 3; $i > 0; $i--) {
//       $signature[] = array_sum(array_slice($signature, -3));
//     }
//     return array_slice($signature, 0, $n);
//   }

// 另外一個酷解法
// function tribonacci($signature, $n) {
//     $res = [];
//     for ($i = 0; $i < $n; $i++) {
//       if ($i < 3)
//         $res[$i] = $signature[$i];
//       else
//         $res[$i] = $res[$i-1] + $res[$i-2] + $res[$i-3];
//     }
//     return $res;
// }

$signature=[0,0,1];
$n=10;

print_r(tribonacci($signature, $n));



?>