<?php

// Get the Middle Character

// You are going to be given a word. Your job is to return the middle character of the word. If the word's length is odd, return the middle character. If the word's length is even, return the middle 2 characters.

function getMiddle($text) {
    if(strlen($text)%2==1){
        return substr($text,(strlen($text)/2),1);
    }else{
        return substr($text,(strlen($text)/2-1),2);
    }
  
}

$text="explod";

echo getMiddle($text);

// 在PHP中，/ 是浮點除法，因此當 n 是奇數時，n/2 的結果會自動向下取整 ex. 3/2=1.5轉換成1
// 然後strlen()如果計算後的數字 是“索引的位置(從0開始)” 例如字串abc 以上計算後為1 [0]=>a, [1]=>b, [2]=>c
// 偶數就是n/2-1 (如果如題要取2位的話)


?>