<?php

// #31 How good are you really?

// There was a test in your class and you passed it. Congratulations!
// But you're an ambitious person. You want to know if you're better than the average student in your class.
// You receive an array with your peers' test scores. Now calculate the average and compare your score!
// Return true if you're better, else false!

// Note:
// Your points are not included in the array of your class's points. Do not forget them when calculating the average score!

function betterThanAverage($classPoints, $yourPoints) {
    // Your code here
    $sum=array_sum($classPoints);
    $count=count($classPoints);
    $average=$sum/$count;
    if($yourPoints>$average){
        return true;
    }else{
        return false;
    }
  }

  // 簡潔寫法
//   function betterThanAverage($classPoints, $yourPoints) {
//     return array_sum($classPoints) / count($classPoints) < $yourPoints;
//   }

  //我在這邊使用return "true"(字串) codewars會顯示錯誤訊息 要使用return true (bool)

  $classPoints=[2,3];
  $yourPoints=5;

  echo betterThanAverage($classPoints, $yourPoints);

?>