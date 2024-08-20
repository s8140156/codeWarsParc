<?php

// #12 Sentence Smash

// Write a function that takes an array of words and smashes them together into a sentence and returns the sentence. You can ignore any need to sanitize words or add punctuation, but you should add spaces between each word. Be careful, there shouldn't be a space at the beginning or the end of the sentence!

function smash(array $words): string {
    // $newWord=[]; //這個宣告是必要的 初始化一個空陣列
    // foreach($words as $word){
    //     $newWord[]=$word;
    // }
    // $newWordStr=implode(' ', $newWord);
    // return $newWordStr;

    return implode(' ',$words);
    // return join(' ',$words); //也可以

  }

  $arr=['This','is','a','book'];
  echo smash($arr);


?>