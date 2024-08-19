<?php

// Abbreviate a Two Word Name

// Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.
// The output should be two capital letters with a dot separating them.
// It should look like this:
// Sam Harris => S.H
// patrick feeney => P.F

function abbrevName($name)
{
    $words=explode(" ",$name);
    $abbreviation="";
    foreach($words as $word){
        $abbreviation .=ucfirst(substr($word,0,1) .".");
    }
    return rtrim($abbreviation, ".");
    // rtrim(): 用於修剪字串右側（結尾）的指定字符的函數
    // 因為原本在組裝字串時 使用的就是字＋ . 所以最後結尾時一定會有多一個點

}

$name='julie chen';

echo abbrevName($name);

// 有想到使用array的index方式(但不知要怎麼使用index提出) 下列是其他網友寫法
// function abbrevName($name)
// {
//   $arr = explode(" ", strtoupper($name)); //是explode()這個函式 才是將字串分割成“陣列”的主要函式
//   return $arr[0][0] . "." . $arr[1][0];
// }

// John Doe
// arr[0] 是 "JOHN"，$arr[0][0] 是 "J"，即第一個單詞的首字母
// arr[1] 是 "DOE"，$arr[1][0] 是 "D"，即第二個單詞的首字母

// strtoupper()將所有字元全部大寫 ex.John=>JOHN



?>