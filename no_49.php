<?php

// #49 Super Duper Easy

// Make a function that returns the value multiplied by 50 and increased by 6. If the value entered is a string it should return "Error".


function problem($x){
    if(is_numeric($x)){
        return $x*50+6;
    }else{
        return 'Error';
    }
}

// is_numeric()直接檢查是否是整數或浮點數

// 很簡潔的三元運算式
// function problem($x){
//     return is_string($x) ? 'Error' : $x * 50 + 6;
//   }


// function problem($x){
//     //your code here
//     $type=gettype($x);
//     if($type=='integer' || $type=='double'){
//         return $x*50+6;
//     }else{
//         return 'Error';
//     }
//   }

// 我資料判別寫float 但實際echo出來資料類型叫double, 改成double後測試無問題
// 自己在測試時要有實驗測試精神 先確認過後再上

$x=1.2;
echo gettype($x); //資料類型顯示double
echo "<br>";
echo problem(1.2);



?>