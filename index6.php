<?php

function toJadenCase(string $string): string
{
    $words=explode(" ",$string);
    foreach($words as &$word){ 
        // &代表引用(refrence), 使用&使得可以“直接"修改陣列中每一個元素
        // 使用引用可以讓你在"不必重新分配陣列"的情況下，直接更改其內容
        // 使用引用時，變量不僅僅是存儲一個值，還存儲對值的引用（類似於指針）。這意味著任何對這個變量的更改都會直接影響原始的數據
        $word=ucfirst($word);
    }
    unset($word); //解除引用$word
    // 解除引用： 使用引用後，必須用 unset() 解引用，否則最後一個引用變量可能會保留在內存中，影響後續的操作
    $capitalFirstString=implode(" ",$words); //這邊是使用$words(字串而不是$word單字)
    // 需要將整個 $words 陣列合併回一個字串，而不是單個單詞

  return $capitalFirstString;
}

$string="you are a good girl";
echo toJadenCase($string);


// ucwords() 內建函數，它的作用是將一個字串中每個單詞的首字母轉換為大寫
// function toJadenCase($string) 
// {
//    return ucwords($string);
// }


?>