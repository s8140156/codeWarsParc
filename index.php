<?php

// #83 Factorial(階乘)

// In mathematics, the factorial of a non-negative integer n, denoted by n!, is the product of all positive integers less than or equal to n. For example: 5! = 5 * 4 * 3 * 2 * 1 = 120. By convention the value of 0! is 1.

// Write a function to calculate factorial for a given input. If input is below 0 or above 12 throw an exception of type ArgumentOutOfRangeException (C#) or IllegalArgumentException (Java) or RangeException (PHP) or throw a RangeError (JavaScript) or ValueError (Python) or return -1 (C).

function factorial(int $n): int
{
    if ($n < 0 || $n > 12) {
        throw new RangeException("Input must be between 0 and 12.");
    }
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// 簡潔的寫法
// function factorial(int $n): int {
//   if ($n > 12 || $n < 0) {
//     throw new RangeException();
//   }
//   return $n ? $n * factorial($n - 1) : 1;
// }

// factorial($n - 1) 就是在呼叫自己本身這個 factorial() 函式，這種寫法叫做：遞迴（Recursion）
// 遞迴：當一個函式「在自己的內部呼叫自己」來處理較小的子問題時，就叫做遞迴
// 當$n=0, return 1 => 因為0!=1，這是遞迴的終止條件
// 當$n>0, return $n * factorial($n-1) 不斷呼叫factorial($n-1)直到遞減到0為止 
// **遞迴有記憶體堆疊上限，所以不能用在太大的數字（這裡設的 n > 12 就是一種限制）
// **遞迴必須有終止條件（這裡是 $n == 0 時回傳 1），否則會變成無限遞迴導致錯誤



try {
    echo factorial(12);
} catch (RangeException $e) {
    echo "錯誤訊息：" . $e->getMessage();
}

?>
