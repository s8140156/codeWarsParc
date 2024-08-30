<?php

// #40 Isograms

// An isogram is a word that has no repeating letters, consecutive or non-consecutive. Implement a function that determines whether a string that contains only letters is an isogram. Assume the empty string is an isogram. Ignore letter case.

function isIsogram($string) {

    $string=strtolower($string);
    $chArray=str_split($string);
    $norepeat=array_unique($chArray);
    if(count($chArray)==count($norepeat)){
        return true;
    }else{
        return false;
    }
}

echo isIsogram('aba')?'true':'false';

// array_unique() 移除陣列中的重複值，並返回一個只包含唯一值的新陣列
// 然後計算原先的陣列($chArray)與移除後($norepeat)的比較字數是否一樣
// 一樣代表沒有重複過 所以兩邊字數一樣=>true

?>