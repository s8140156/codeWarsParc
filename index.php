<?php

// # 91 Fake Binary
// Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.

function fake_bin(string $s): string {
    $result=''; // 宣告空字串
    foreach(str_split($s) as $ch){ // str_split() 把輸入的字串變成陣列（for 遍歷用）
        $result .= $ch < 5 ? '0' : '1'; // 最後結果用 .= 把每個處理過的字元“拼接回一個字串”(別忘記你一開始是宣告$result=''空字串)
    }
    return $result; // 回傳的是字串！！
}

// 使用陣列的方式
// function fake_bin(string $s): string {
//     $result = []; //  宣告空陣列
//     foreach (str_split($str) as $ch) {
//         $result[] = $ch < 5 ? '0' : '1'; // 陣列 push
//     }
//     return implode('', $result); // implode() 拼回字串
// }


// strtr()方式
// function fake_bin(string $s): string {
//   return strtr($s, '0123456789', '0000011111');
// }
// 語法：strtr(string,from,to) 或 strtr(string,array)

// 還是可以用str_replace()喔
// function fake_bin(string $s): string {
//   $s = str_replace(range(0,4), 0, $s);
//   $s = str_replace(range(5,9), 1, $s);
  
//   return $s;
// }


echo fake_bin('2345678');



?>