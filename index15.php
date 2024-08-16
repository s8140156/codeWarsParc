<?php

function hoopCount ($n)
{
    if($n>=10){
        return "Great, now move on to tricks!";
    }else{
        return "Keep at it until you get it!";
    }
}

$n=11;

echo hoopCount($n);

// function hoopCount(int $n): string {
//     return $n >= 10 ? 'Great, now move on to tricks' : 'Keep at it until you get it';
//   }



?>