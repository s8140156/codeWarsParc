<?php

function paperwork(int $n, int $m): int
{
  // Good luck :)
  if($n<0 || $m<0){
    return 0;
  }else{
    return $n*$m;
  }
}

echo paperwork(7,5);

// function paperwork(int $n, int $m): int {
//     return $n < 0 || $m < 0 ? 0 : $n * $m;
//   }


?>