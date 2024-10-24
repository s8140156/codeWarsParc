<?php

// #65 Remove First and Last Character

// It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string. You're given one parameter, the original string. You don't have to worry about strings with less than two characters.


function remove_char(string $s): string {
    // Write your code here
    return substr($s,1,-1);
    //substr():1=>是從索引1位置開始擷取;因為前後不要 所以索引0是不要的
  }

  echo remove_char('Apple');


?>