<?php

// #78 Primes in numbers
// Given a positive number n > 1 find the prime factor decomposition of n. The result will be a string with the following form :
//  "(p1**n1)(p2**n2)...(pk**nk)"
// Example: n = 86240 should return "(2**5)(5)(7**2)(11)"


function primeFactors($n)
{
    // your code
    $factors = [];
    $divisor = 2; // 除數從2開始

    while ($n > 1) {
        $count = 0;
        while ($n % $divisor == 0) {
            $count++;
            $n /= $divisor;
            // echo "Divisor: $divisor, Count: $count, Remaining n: $n\n";
        }
        // 如果當前質數出現過，加入結果陣列
        if ($count > 0) {
            $factors[$divisor] = $count; // key:$divisor(除數) value:$count(除幾次)
            // 這邊是表現陣列裡的key(質數/除數)要加入陣列
        }
        $divisor++; //嘗試下一個除數(質數)
    }
    // 組合題意要的表現方式
    $result = '';
    foreach ($factors as $prime => $count) {
        $result .= '(' . $prime;
        if ($count > 1) {
            $result .= '**' . $count;
        }
        $result .= ')';
    }
    return $result;
}

echo primeFactors(86240);

// 更簡潔寫法 請了解strval()在幹嘛
// function primeFactors($n) {
//     if ($n < 2) return "(".strval($n).")";
//     $factors = "";
//     for ($i = 2; $i <= $n; $i++) {
//         $cnt = 0;
//         while ($n % $i == 0) {
//             $cnt++;
//             $n /= $i;
//         }
//         if ($cnt) {
//             $factors .= "(".strval($i);
//             if ($cnt > 1) {
//                 $factors .= "**".strval($cnt);
//             }
//             $factors .= ")";
//         }
//     }
//     return $factors;
// }


?>
