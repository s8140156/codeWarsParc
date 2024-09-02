<?php

// #42 Count the smiley faces!

// Given an array (arr) as an argument complete the function countSmileys that should return the total number of smiling faces.

// Rules for a smiling face:
// Each smiley face must contain a valid pair of eyes. Eyes can be marked as : or ;
// A smiley face can have a nose but it does not have to. Valid characters for a nose are - or ~
// Every smiling face must have a smiling mouth that should be marked with either ) or D
// No additional characters are allowed except for those mentioned.


// 方法1
// function count_smileys($arr): int{

//     $count=0;
//     $validSmiley=[':)',':D',';)',';D',':-)',':-D',';-)',';-D',':~)',':~D',';~)',';~D'];
//     foreach($arr as $smiley){
//         if(in_array($smiley,$validSmiley)){
//             $count++;
//         }
//     }
//     return $count;
// }

// 方法2
// function count_smileys($arr): int{
//     if (!empty($arr)) {
//         $count = 0;
//         foreach ($arr as $smiley) {
//             if ($smiley == ':)' || $smiley == ':D' || $smiley == ';)' || $smiley == ';D' ||
//                 $smiley == ':-)' || $smiley == ':-D' || $smiley == ';-)' || $smiley == ';-D' ||
//                 $smiley == ':~)' || $smiley == ':~D' || $smiley == ';~)' || $smiley == ';~D') {
//                 $count++;
//             }
//         }
//         return $count;
//     } else {
//         return 0;
//     }
// }

//簡潔寫法(我想用count()計算時)
function count_smileys($arr): int{
    // 只計算符合笑臉表情的元素數量
    return count(array_filter($arr, function($smiley) {
        return in_array($smiley, [':)', ':D', ';)', ';D', ':-)', ':-D', ';-)', ';-D', ':~)', ':~D', ';~)', ';~D']);
    }));
}

// $arr=[];
$arr=[':)',':D','XD',';-D'];

echo count_smileys($arr);


?>
