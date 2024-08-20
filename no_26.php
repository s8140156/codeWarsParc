<?php

// #26 Number of People in the Bus

// There is a bus moving in the city which takes and drops some people at each bus stop.
// You are provided with a list (or array) of integer pairs. Elements of each pair represent the number of people that get on the bus (the first item) and the number of people that get off the bus (the second item) at a bus stop.
// Your task is to return the number of people who are still on the bus after the last bus stop (after the last array). Even though it is the last bus stop, the bus might not be empty and some people might still be inside the bus, they are probably sleeping there :D
// Take a look on the test cases.
// Please keep in mind that the test cases ensure that the number of people in the bus is always >= 0. So the returned integer can't be negative.
// The second value in the first pair in the array is 0, since the bus is empty in the first bus stop.

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
