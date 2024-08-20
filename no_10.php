<?php

// #10 Disemvowel Trolls

// Trolls are attacking your comment section!

// A common way to deal with this situation is to remove all of the vowels from the trolls' comments, neutralizing the threat.
// Your task is to write a function that takes a string and return a new string with all vowels removed.
// For example, the string "This website is for losers LOL!" would become "Ths wbst s fr lsrs LL!".
// Note: for this kata y isn't considered a vowel.

function disemvowel($string){

    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U']; //大小寫都要考量
    $words = explode(' ', $string);
    $noVowelWords = [];
    foreach ($words as $word) {
        $newWord = '';
        for ($i = 0; $i < strlen($word); $i++) {
            $char=$word[$i];
            if(!in_array($char,$vowels)){
                $newWord.=$char;
            }
        }
        $noVowelWords[]=$newWord;
    }
    $noVowelString=implode(' ',$noVowelWords); //測試如果要以"空格"來拆解 務必留出' '出來 不然會顯示error
    return $noVowelString;
}

$input='What a wonderful world';
echo disemvowel($input)."<br>";


?>
