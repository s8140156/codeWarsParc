<?php

// #66 Small enough? - Beginner

// You will be given an array and a limit value. You must check that all values in the array are below or equal to the limit value. If they are, return true. Else, return false.
// You can assume all values in the array are numbers.

function smallEnough($a, $limit){
    $big=array_filter($a,function($value) use($limit){
        // use($limit) 讓匿名函數能使用外部變數$limit
        return $value>$limit;
        //反其道而行 因為題意是要比limit小或等於的值 所以用array_filter()去保留比limit大的值放進big陣列中
    });
  return count($big)===0;
  // 如果big陣列裡面的是空的 就表示所有值比limit小 所以沒辦法放進陣列中 這邊判斷是count要===0
  // 這樣符合題意為true
}

// array_filter():此函數用來過濾陣列中的元素。它會將陣列中的每個元素傳入回呼函數（callback function），如果回呼函數返回 true，則該元素會保留在結果陣列中


// 寫法1
// function smallEnough($a, $limit) {
//     return max($a) <= $limit;
//   }

// 寫法2
// function smallEnough($a, $limit)
// {
//   foreach($a as $item) {
//     if ($item > $limit) return false;
//   }
  
//   return true;
// }

// 寫法3

// function smallEnough($a, $limit)
// {
//   foreach($a as $value){
//   $result = ($value < $limit || $value == $limit) ? true : null;
     // 這次有犯的錯是將$value == $limit(比較運算符) =>$value = $limit(賦值運算符)
     // 這不是在計算 是在做判斷及比較 true/false問題
//   if($result != true)
//   return false;
//   }
//   return $result;
// }
  

echo smallEnough([17,22], 21)?'true':'false';





?>