<?php

// #41 Sort array by string length
// Write a function that takes an array of strings as an argument and returns a sorted array containing the same strings, ordered from shortest to longest.
// ["Telescopes", "Glasses", "Eyes", "Monocles"]=>["Eyes", "Glasses", "Monocles", "Telescopes"]

function sortByLength($toSort)
{
    usort($toSort, function ($a, $b) {
        return strlen($a) - strlen($b);
    });

    return $toSort;
}

print_r(sortByLength(['kill','do','loved','banana']));

// usort($toSort, function($a, $b) {...})：直接對這個陣列進行排序，按照字串的長度從短到長排列 直接存回$toSort
// strlen($a) - strlen($b)：將 $a 的長度減去 $b 的長度 運算的結果決定了 $a 和 $b 在排序過程中的相對順序
// 負數 (strlen($a) < strlen($b)): $a 比 $b 短，因此 $a 應該排在 $b 之前。
// 正數 (strlen($a) > strlen($b)): $a 比 $b 長，因此 $a 應該排在 $b 之後。
// 零 (strlen($a) == strlen($b)): $a 和 $b 長度相同，順序不變


?>
