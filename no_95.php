<?php

// # 95 Encrypt this!
// You want to create secret messages which can be deciphered by the Decipher this! kata. Here are the conditions:

// Your message is a string containing space separated words.
// You need to encrypt each word in the message using the following rules:
// The first letter must be converted to its ASCII code.
// The second letter must be switched with the last letter
// Keepin' it simple: There are no special characters in the input.

// ex.
// encryptThis("Hello") === "72olle"
// encryptThis("good") === "103doo"
// encryptThis("hello world") === "104olle 119drlo"

function encryptThis($text): string{
  $words=explode(' ',$text); // 這邊注意因為字串分隔是by"空格" 所以explode是' '(空格) 而不是''(沒有的空的); explode() input:string, return:array 
  foreach($words as &$word){ // 這邊使用&$word "引用", $word 直接指向 $words 陣列的那個元素, 改 $word = ... 的同時，對應的 $words 陣列元素也被改掉了, 迴圈結束後 $words 已經是完整修改過的陣列，不需要再寫回去
    $ascii=ord($word[0]); // ord() 返回字符串中第一个字符的 ASCII 值, 但使用ord($word[0])是好閱讀 清楚意圖
    $chars=str_split(substr($word,1));
    if(count($chars) >1){
        $tmp=$chars[0]; //變數對調 這邊$chars[0] 是已排除第一個$ascii字後的其餘字元 也就是第二個字開始
        $lastIndex=count($chars)-1;
        $chars[0]=$chars[$lastIndex];
        $chars[$lastIndex]=$tmp;
    }
    $word=$ascii . implode('',$chars);
  }
  return implode(' ',$words); // 帶入$words陣列 前面的執行已將$words陣列都替換了 return:string
}

// substr() 語法：substr(string[要返回其中一部分的字串],start[規定在字串的何處開始, 正數：在字串的指定位置开始/負數：在字串結尾的指定位置开始/0:在字符串中的第一个字符处开始],length[optional 规定要返回的字符串长度。默认是直到字符串的结尾])

// 簡潔寫法
// function encryptThis($text): string
// {
//   $results = [];
//   foreach(explode(' ', $text) as $key => $word) {
//     $results[$key] = ord($word[0]);
//     $length = strlen($word);
    
//     if ($length > 1) {
//       $tmp = $word;
//       $word[1] = $tmp[$length - 1];
//       $word[$length - 1] = $tmp[1];
//       $results[$key] .= substr($word, 1);
//     }
//   }
//   return implode(' ', $results);
// }

// 直觀(?)寫法
// function encryptThis($text): string
// {
//   $encryptedWords = [];
//   $words = explode(' ', $text);
//   foreach($words as $word) {
//     $chars = str_split($word);
//     $firstChar = array_shift($chars);
//     $secondChar = array_shift($chars);
//     $lastChar = array_pop($chars);
//     $encryptedWords[] = ord($firstChar) . $lastChar . implode('', $chars) . $secondChar;
//   }
//   return implode(' ', $encryptedWords);
// }

echo encryptThis('hello world');


?>