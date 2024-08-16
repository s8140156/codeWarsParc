<?php

function number($bus_stops)
{
    // Good luck, enjoy!
    $last_stop = 0;
    foreach ($bus_stops as $pair) {
        $last_stop += $pair[0] - $pair[1];
    }
    return $last_stop;
}

echo number([[1,0],[2,1],[3,2],[4,2]]);
// 注意：在輸入input時 是用一個大陣列[] 去包裡面每一個小陣列[1,0],[2,1] 不然會顯示錯誤如下
// Trying to access array offset on value of type int in /Users/yenlingchen/test/index.php on line 8

// 有趣的解法
// function number(array $busStops): int {
//     $peopleInBus = 0;
//     foreach($busStops as $busStop) {
//       [$in, $out] = $busStop;
//       $peopleInBus += $in;
//       $peopleInBus -= $out;
//     }
//     return $peopleInBus;
//   }


?>
