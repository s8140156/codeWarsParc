<?php

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