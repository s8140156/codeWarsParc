<?php

// #4 Find Maximum and Minimum Values of a List

// Your task is to make two functions ( max and min, or maximum and minimum, etc., depending on the language ) that receive a list of integers as input, and return the largest and lowest number in that list, respectively.

// function findMax($nums){
//     $max=$nums[0];
//     foreach($nums as $num){
//         if($num>$max){
//         $max=$num;
//         }
//     }
//         return $max;
// }
    
//     function findMin($nums){
//     $min=$nums[0];
//     foreach($nums as $num){
//         if($num<$min){
//         $min=$num;
//         }
//     }
//         return $min;
// }

// function findNums($array){
//     $max=findMax($array);
//     $min=findMin($array);
//     return "Max is ". $max. "; Min is ". $min; 

// }

function maximum($array) {
    return max($array);
  }

function minimum($array) {
    return min($array);
 }
 
 //max(); min()用在陣列裡找最大最小值
    
    
  echo "Max is ".maximum([5,1,3]). "; Min is ". minimum([5,1,3]);



?>