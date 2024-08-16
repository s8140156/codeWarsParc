<?php

// function hero(int $bullets, int $dragons){
//     // throw new Exception("Function not implemented");
//     if(($bullets/2)>=$dragons){
//         return true;
//     }else{
//         return false;
//     }
// }

function hero(int $bullets, int $dragons){
    return $bullets/2>=$dragons;
    //因為是判斷(比較運算) 所以返回的就是bool (可以不用寫if else判斷式 if-else 可以被簡化為直接返回判斷結果)
    //別忘記 因為是判斷 所以雖然看起來是數量比較 你要看最後結果(true/false) 要在輸入數值後 寫判斷顯示true/false
}

$bullets=10;
$dragons=5;

echo hero($bullets,$dragons)?'true':'false';


?>