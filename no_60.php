<?php

// #60 No zeros for heros
// 1450 -> 145
// 960000 -> 96
// 1050 -> 105
// -1050 -> -105


function noBoringZeros(int $n): int {

    return intval(rtrim($n,0));
  }

  // rtrim()這是在處理移除字串右侧的字元 這支函數是處理"字串"
  // ltrim()是處理字串左側的; trim()是處理字串兩側
  // 依據題意 回傳資料型態要是int 所以必須確保資料型態正確intval()

// 使用計算方式 資料型態就是int
//   function noBoringZeros(int $n): int{
//     while ($n % 10 === 0 && $n !== 0) {
//         $n = (int)($n / 10);
//     }
//     return $n;
// }

  echo noBoringZeros(-23050000);



?>