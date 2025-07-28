<?php

// #80 Mumbling
// Examples:
// accum("abcd") -> "A-Bb-Ccc-Dddd"
// accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
// accum("cwAt") -> "C-Ww-Aaa-Tttt"

function accum($s) {
    // your code
    $result=[]; //記得是宣告在外面
    for($i=0;$i<strlen($s);$i++){
        $ch=$s[$i]; //取得字母
        // print_r($ch);
        $result[]=strtoupper($ch).str_repeat(strtolower($ch),$i);
    }
    return implode('-',$result);
    
    
}

// 使用foreach()方式
// function accum($s) {
//     $parts = [];
    
//     foreach (str_split($s) as $index => $part) {
//       $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
//     }
    
//     return implode('-', $parts);
// }

// 使用for() 注意是以連接方式(簡寫)串字串
// function accum($s) {
//     $result = "";
//     for($i = 0; $i < strlen($s); $i++){
//       $letter = $s[$i];
//       $result .= strtoupper($letter) . str_repeat(strtolower($letter), $i) . '-';
//     }
//     return trim($result, "-");
// }


echo accum('abc');




?>