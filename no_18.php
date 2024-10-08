<?php

// #18 You're a square!

// A square of squares
// You like building blocks. You especially like building blocks that are squares. And what you even like more, is to arrange them into a square of square building blocks!
// However, sometimes, you can't arrange them into a square. Instead, you end up with an ordinary rectangle! Those blasted things! If you just had a way to know, whether you're currently working in vain… Wait! That's it! You just have to check if your number of building blocks is a perfect square.

// Task
// Given an integral number, determine if it's a square number:
// In mathematics, a square number or perfect square is an integer that is the square of an integer; in other words, it is the product of some integer with itself.
// The tests will always use some integral number, so don't worry about that in dynamic typed languages.

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