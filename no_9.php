<?php

// #9 Find the smallest integer in the array
// Given an array of integers your solution should find the smallest integer.

// For example:
// Given [34, 15, 88, 2] your solution will return 2
// Given [34, -345, -1, 100] your solution will return -345
// You can assume, for the purpose of this kata, that the supplied array will not be empty.

function smallestInteger ($arr) {
    $result = min($arr);
    return $result;
}


// 參考
function findNums($array){
    $array=[];
    function findMax($nums){
        $max=$nums[0];
        foreach($nums as $num){
            if($num>$max){
            $max=$num;
            }
        }
            return "Max is ". $max. "<br>";
    }
        
        function findMin($nums){
        $min=$nums[0];
        foreach($nums as $num){
            if($num<$min){
            $min=$num;
            }
        }
            return "Min is ". $min. "<br>";
    }
}

echo findNums([4,6,2,1,9,63,-134,566]);


?>