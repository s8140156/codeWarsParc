<?php

// # 89 Testing 1-2-3

// Write a function which takes a list of strings and returns each line prepended by the correct number.
// The numbering starts at 1. The format is n: string. Notice the colon and space in between.
// ex:["a", "b", "c"] --> ["1: a", "2: b", "3: c"]

// array_map()
function number(array $lines): array{
    return array_map(function($val,$i){
        return ($i+1) . ': ' . $val;
    },$lines,array_keys($lines));
}
// array_map() 語法：array_map(callback, array1, array2, ...) 
// 當傳入兩個陣列時，callback 裡的 第一個參數是 array1 的值，第二個是 array2 的值
// 從以上程式碼來看 array1:input $lines的val array2:input 使用array_keys($lines)取$lines陣列的index($i)


// foreach方式
// function number(array $lines): array{
//     $arr=[];
//     foreach($lines as $idx=>$val){
//         $arr[]=($idx+1) . ': ' . $val;
//     }
//     return $arr;
// }

print_r(number(["A","B","C","D"]));

?>