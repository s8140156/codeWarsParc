<?php

// # 88 Find the Remainder

// Write a function that accepts two integers and returns the remainder of dividing the larger value by the smaller value.
// Division by zero should return an empty value
// example
// n = 17
// m = 5
// result = 2 (remainder of `17 / 5`)

// n = 13
// m = 72
// result = 7 (remainder of `72 / 13`)

// n = 0
// m = -1
// result = 0 (remainder of `0 / -1`) **合法除法 此會回傳0

// n = 0
// m = 1
// result - division by zero (refer to the specifications on how to handle this in your language)

function remainder($a, $b) {
    $large=max($a,$b);
    $small=min($a,$b);
    return $small == 0 ? null : $large % $small; // 根據題意1 / 0、0 / 0 則應回傳 null
}

// 簡潔寫法
// function remainder($a, $b) {
//     return min( $a, $b ) == 0 ? null : max( $a, $b ) % min( $a, $b );
// }

echo remainder(0,-1);




?>