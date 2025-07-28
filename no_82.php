<?php

// #82 Sum Arrays
// Write a function that takes an array of numbers and returns the sum of the numbers. The numbers can be negative or non-integer. If the array does not contain any numbers then you should return 0.

function sum(array $a): float {
  if(empty($a)){
    return 0;
  }else{
    $sum=0;
    foreach($a as $n){
        $sum+=$n;
    }
    return $sum;
  }
}

// $a=[];
// $a=[4,3,2,1];
$a=[4,3,2,-99];
echo sum($a);

?>