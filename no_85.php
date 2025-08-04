<?php

// #85 What is between

// Complete the function that takes two integers (a, b, where a < b) and return an array of all integers between the input parameters, including them.
// a=1 b=4 -->[1,2,3,4]

function between(int $a, int $b): array {
    $array=[];
    for($i=$a; $i<=$b; $i++){
        $array[]=$i;
    }
  return $array;
}

// 簡潔語法
// function between(int $a, int $b): array {
//     return range($a, $b);
// }

// range()
// 語法：range(start(起始), end(結束), step = 1(間距 預設1))
// 也可以用在字元喔 print_r(range('a', 'e'));
// range() 可以不用管兩個數誰大誰小 他可以升冪也可以降冪(自動處理)



// 面面俱到法
// function between(int $a, int $b): array {
//     return $a < $b ? range($a, $b) : range($b, $a);
// }



print_r(between(-3, 7));


?>