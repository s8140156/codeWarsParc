<?php

// #63 Remove anchor from URL

// Complete the function/method so that it returns the url with anything after the anchor (#) removed.
// ex. "www.codewars.com#about" --> "www.codewars.com"

function replaceAll($string) {
    $newStrings=explode('.',$string);
    foreach($newStrings as &$newString){
        //注意須加& 使用&引用，直接修改原本的值
        $newString=explode('#',$newString)[0];
        // 可以再使用explode by #分割 如題意是#後面字元都不要 所以保留分割後第0個位置
    }
    return implode('.',$newStrings);
    // 這邊是將"$newStrings"以.合併
}

// 看看人家理解的更精確
// function replaceAll($string) {
//     return explode("#", $string)[0];
//   }

// 另一種寫法
// function replaceAll($string) {
// 	$pos = strpos($string, "#");
// 		if ($pos === false) {
// 			return $string;
       // 如果沒找到#直接回傳字串
// 		} else {
// 			return strstr($string, "#", true);
       // 如果有找到# 第三個參數是true, 則返回#前面字元 (第三個參數預設是false)
       // strstr()：搜尋字串是否在另一字串存在 一般預設如果存在 是返回包括此字串及後面剩餘部份
// 		}
// }

$input = "http://www.uol.com.br#teste";
echo replaceAll($input);
echo "<br>";

echo strstr('Hello World','World');



?>