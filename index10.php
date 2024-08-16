<?php

function isSquare($n){

    $sqrt_n=sqrt($n);
    return $sqrt_n==floor($sqrt_n);
    //雖然是在比較數值 因為==運算符 結果只會是true, falase, bool
}

$n=7;
echo isSquare($n)?'true':'false'; //bool好像要用判斷的方式將true, false列出
echo gettype(isSquare($n)); //資料型態：boolean


// sol1:
// function isSquare($n){
//     return sqrt($n) === floor(sqrt($n)) ? true : false;
// }

// sol2:
// function isSquare($n){
//     if (sqrt($n) === floor(sqrt($n))) {
//       return true;
//     }
//     return false;
//   }



?>