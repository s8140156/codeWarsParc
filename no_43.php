<?php

// #43 Find the unique number

// There is an array with some numbers. All numbers are equal except for one. Try to find it!
// findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
// findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55

// It’s guaranteed that array contains at least 3 numbers.
// The tests contain some very huge arrays, so think about performance.

function find_uniq($a)
{
    $counts = [];
    foreach ($a as $item) {
        $itemStr = (string)$item;
        if (isset($counts[$itemStr])) {
            $counts[$itemStr]++;
        } else {
            $counts[$itemStr] = 1;
        }
    }

    foreach ($counts as $key => $count) {
        if ($count === 1) {
            return $key*1;
        }
    }

    return null;
}

// 更簡潔寫法
// function find_uniq($a) {
//     sort($a);  // 將數組進行升序排序
    
//     // 檢查排序後的數組前兩個元素是否相同
//     return ($a[0] === $a[1]) ? end($a) : current($a);
//   }

// 如果它們相同，說明數組中前幾個元素都是相同的，唯一的元素一定在數組的最後位置
// 如果它們不同，說明第一個元素本身就是唯一的元素


//以下方式卡在使用array_count_values()只能處理字串和整數類型的數值
// function find_uniq($a)
// {
//     // Do Magic :)
//     $counts = array_count_values($a);
//     foreach ($counts as $key => $num) {
//         if ($num == 1) {
//             return strval($key);
//         }
//     }
// }

$a1 = [1, 1, 1, 7.1818181818181818999, 1, 1];
$a2 = [0, 0, 0.77666666666, 0, 0];
$a3 = [0, 4, 0];
echo find_uniq($a1) . "<br>";
echo find_uniq($a2) . "<br>";
echo find_uniq($a3) . "<br>";

// 1 強制轉換 (string)$item
// 是一種語法結構，用於快速進行類型轉換。
// 例如 (int)$a、(float)$a、(string)$a 等

// 2 函數式轉換 intval($a)
// 是一種函數式方法，適合需要明確指定轉換邏輯的情況。
// 例如 intval($a)、floatval($a)、strval($a) 等。

// 強制轉換 更簡潔，適合簡單的類型轉換操作。
// 函數式轉換 更具表達力，並且在處理一些特殊情況（如帶有非數字字元的字串）時可能表現得更好


?>
