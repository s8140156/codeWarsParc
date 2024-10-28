<?php

// #67 Exclamation marks series #11: Replace all vowel to exclamation mark in the sentence

// Replace all vowel to exclamation mark in the sentence. aeiouAEIOU is vowel.

function replace(string $s): string {
    // Write your code here
    $vowels=['a','e','i','o','u','A','E','I','O','U'];
    foreach($vowels as $vow){
        $s=str_replace($vow,'!',$s);
        // 常犯錯誤：我本來建立一個新變數$newS造成在foreach迴圈中，每次使用 str_replace 都會生成一個新的字串$newS，
        // 但你並沒有在每次替換後"更新$s"，因此最終只會"反映出最後一次替換"的結果
    }
    return $s;
  }

  // 別種寫法
//   function replace($s) {
//     $VOWELS = "aeiouAEIOU";
  
//     for($i = 0; $i < strlen($s); ++$i) {
//       if(strpos($VOWELS, $s[$i]) !== false) {
         // 為何要使用!==false判斷（其實就是有找到這個母音的位置）
         // 因為使用==true判斷 因為strpos()返回是整數0或是false
         // 會造成假設找到的就是第一個字元(索引0)則返回0造成誤判false
//         $s[$i] = "!";
//       }
//     }
//     return $s;
//   }

  echo replace("!Hi! Hi!");


?>