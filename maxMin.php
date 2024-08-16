<?php

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