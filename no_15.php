<?php

// #15 Beginner Series #1 School Paperwork

// Your classmates asked you to copy some paperwork for them. You know that there are 'n' classmates and the paperwork has 'm' pages.
// Your task is to calculate how many blank pages do you need. If n < 0 or m < 0 return 0.

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