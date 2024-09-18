<?php

// #52 Beginner Series #2 Clock

// Clock shows h hours, m minutes and s seconds after midnight.
// Your task is to write a function which returns the time since midnight in milliseconds.(毫秒)

function past($h, $m, $s) {
    // your code here
    return ($h*3600+$m*60+$s)*1000;
  }

// 使用時間函數
//   function past($h, $m, $s) {
//       return strtotime("$h:$m:$s", 0) * 1000;
//   }

echo past(3,2,1);





?>