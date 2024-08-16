<?php

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

function reverseWords($str) {

    $words=explode(' ',$str);
    $reverseWords=array_map('strrev',$words);
    $reverseStr=implode(' ',$reverseWords);
  
    return $reverseStr;
  }

  $input='This is a pen';
  echo reverseWords($input)."<br>";

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
