<?php

// #68 Count of positives / sum of negatives

// Given an array of integers.

// Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers. 0 is neither positive nor negative.
// If the input is an empty array or is null, return an empty array.



function countPositivesSumNegatives($input)
{

    if (empty($input)) {
        return [];
        // 當是空的返回“空陣列” 寫法是這樣 不是return $input
    }
    $positive = array_filter($input, function ($num) {
        return $num > 0;
    });
    // print_r($positive);
    // echo "<br>";
    $pos = count($positive);


    $negtive = array_filter($input, function ($num) {
        return $num < 0;
    });
    $neg = array_sum($negtive);

    $result = [$pos, $neg];
    return $result;
}

// 簡潔寫法
// function countPositivesSumNegatives($input) {
//     if (empty($input)) {
//       return [];
//     }
    
//     $positives = array_filter($input, function($i) { return $i > 0; });
//     $negatives = array_filter($input, function($i) { return $i < 0; });
    
//     return [count($positives), array_sum($negatives)];
//   }

// foreach寫法
// function countPositivesSumNegatives($input) {
//     if (empty($input)) {
//       return [];
//     }
    
//     $pos = $neg = 0;
//     foreach ($input as $value) {
//       if ($value > 0) {
//         $pos += 1;
           // 這是計算個數喔 也可以$pos++;
//       } else {
//         $neg += $value;
           // 這是加總負數 所以是將$value值加總
//       }
//     }
    
//     return [$pos, $neg];
// }

$input = [0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14];
print_r(countPositivesSumNegatives($input));
