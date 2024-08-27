<?php

// #36 Replace With Alphabet Position

// In this kata you are required to, given a string, replace every letter with its position in the alphabet.
// If anything in the text isn't a letter, ignore it and don't return it.
// "a" = 1, "b" = 2, etc.

function alphabet_position(string $s): string {
    // Your code here
    $alphabets=["a"=>1,
                "b"=>2,
                "c"=>3,
                "d"=>4,
                "e"=>5,
                "f"=>6,
                "g"=>7,
                "h"=>8,
                "i"=>9,
                "j"=>10,
                "k"=>11,
                "l"=>12,
                "m"=>13,
                "n"=>14,
                "o"=>15,
                "p"=>16,
                "q"=>17,
                "r"=>18,
                "s"=>19,
                "t"=>20,
                "u"=>21,
                "v"=>22,
                "w"=>23,
                "x"=>24,
                "y"=>25,
                "z"=>26
            ];
    $s=strtolower($s);
    $result=[];
    foreach(str_split($s) as $ch){
        if(array_key_exists($ch,$alphabets)){
            $result[]=$alphabets[$ch];
        }
    }
    return implode(' ',$result);
    // 函數的回傳類型宣告為 string。在 PHP 中，不能直接將陣列轉換為字串並回傳。需要先將陣列轉換為字串
    // 使用implode()用空格間隔數字
  }

  $s="This is a book";
  echo alphabet_position($s);





?>