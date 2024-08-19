<?php

// Grasshopper - Grade book
 
// Complete the function so that it finds the average of the three scores passed to it and returns the letter value associated with that grade.

function getGrade($a, $b, $c) {
    // your code here
    $arr=[$a,$b,$c];
    $sum=array_sum($arr);
    $count=count($arr);
    $average=$sum/$count;

    switch(true){ //注意：使用switch case是判斷當"true"時 有哪些“條件”要顯示
        case ($average>=90  && $average<=100);
        return 'A';
        case ($average>=80  && $average<90);
        return 'B';
        case ($average>=70  && $average<80);
        return 'C';
        case ($average>=60  && $average<70);
        return 'D';
        default:
        return 'F';
    }
  }

  echo getGrade(50,50,50);

  // 如此簡單明瞭! 解法一
  // function getGrade($a, $b, $c) {
  //   $tmp = ($a + $b + $c) / 3;
  //   if($tmp >= 90) return 'A';
  //   if($tmp >= 80) return 'B';
  //   if($tmp >= 70) return 'C';
  //   if($tmp >= 60) return 'D'; else return 'F';
  // }

  // 解法二
  // function getGrade( ...$a) {
  //   $avr = array_sum($a)/count($a);
  //   if ($avr >= 90) return 'A';
  //   if ($avr >= 80) return 'B';
  //   if ($avr >= 70) return 'C';
  //   if ($avr >= 60) return 'D';
  //   return 'F';
  // }

  // 解法三
  //   function getGrade($a, $b, $c) {
  //     $score = ($a + $b + $c) / 3;
  //     return match(true) {
  //         $score >= 90 => 'A',
  //         $score >= 80 => 'B',
  //         $score >= 70 => 'C',
  //         $score >= 60 => 'D',
  //         default => 'F',
  //     };
  // }
  


?>