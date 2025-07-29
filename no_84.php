<?php

// #84 Tortoise racing

// Two tortoises named A and B must run a race. A starts with an average speed of 720 feet per hour. Young B knows she runs faster than A, and furthermore has not finished her cabbage.
// When she starts, at last, she can see that A has a 70 feet lead but B's speed is 850 feet per hour. How long will it take B to catch A?
// More generally: given two speeds v1 (A's speed, integer > 0) and v2 (B's speed, integer > 0) and a lead g (integer > 0) how long will it take B to catch A?
// The result will be an array [hour, min, sec] which is the time needed in hours, minutes and seconds (round down to the nearest second) or a string in some languages.
// If v1 >= v2 then return nil, nothing, null, None or {-1, -1, -1} for C++, C, Go, Nim, Pascal, COBOL, Erlang, [-1, -1, -1] for Perl,[] for Kotlin or "-1 -1 -1" for others.
// race(720, 850, 70) => [0, 32, 18] or "0 32 18"
// race(80, 91, 37)   => [3, 21, 49] or "3 21 49"

function race($v1, $v2, $g) {
    if($v1 >= $v2){
        return null;
    }
    $speedDiff=$v2-$v1;
    $remainder=$g / $speedDiff;
    $totalSecs=floor($remainder * 3600);
    $hr=floor($totalSecs / 3600);
    $min=floor(($totalSecs % 3600) / 60);
    $sec=($totalSecs % 60);
    $catchup=[];
    return $catchup=[$hr, $min, $sec];
}

// 超簡潔版本1
// function race($v1, $v2, $g) {
//   if($v1 >= $v2) return null;
//   $h = $g / ($v2 - $v1);
//   return [floor($h), (floor($h * 60) % 60), floor($h * 3600) % 60];
// }

// 超簡潔版本2
// function race($v1, $v2, $g) {
//   if($v1 >= $v2)
//     return null;
  
//   $h = $g/($v2-$v1);
//   return explode (':',gmdate("H:i:s", floor($h*3600)));
// }

// 超簡潔版本3
// function race($v1, $v2, $g) {
//     return $v2 >= $v1 ? explode(' ', date("H i s", mktime(0, 0, $g*3600/($v2-$v1)))) : null;
// }

$v1=80;
$v2=91;
$g=37;

print_r(race($v1, $v2, $g));





?>