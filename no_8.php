<?php

// #8 Return Negative

// In this simple assignment you are given a number and have to make it negative. But maybe the number is already negative?

function makeNegative($num){
    return -abs($num);
}

// function makeNegative($num) {
//     return $num >= 0 ? -$num : $num;  
//   }

?>