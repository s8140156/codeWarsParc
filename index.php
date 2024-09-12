<?php

// #48 Array.diff

// Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.
// It should remove all values from list a, which are present in list b keeping their order.
// arrayDiff([1,2],[1]) == [2]
// If a value is present in b, all of its occurrences must be removed from the other:
// arrayDiff([1,2,2,2,3],[2]) == [1,3]

function arrayDiff($a, $b) {
    // your code here
    $newArr=array_diff($a,$b);
    return array_values($newArr);

  }

print_r(arrayDiff([1,2,3],[2]));
// echo arrayDiff([1,2,3],[2]);

// array_diff() 比較兩個陣列並移除相同的元素 返回第一個陣列中有但第二個陣列中沒有的元素
// 但是array_diff()會保留陣列原來的索引 不會重新編排

// array_values() 重新索引 (重新編排一個陣列的索引，從 0 開始。)

// 另外 這次有嘗試使用implode()=>陣列轉換為字串 但題意是return陣列 函數使用錯誤




?>