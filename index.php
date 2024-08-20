<?php

// #34 Sum of the first nth term of Series

// Your task is to write a function which returns the n-th term of the following series, which is the sum of the first n terms of the sequence (n is the input parameter).
// series: 1+1/4+1/7+1/10+1/13...You will need to figure out the rule of the series to complete this.

// Rules
// You need to round the answer to 2 decimal places and return it as String.
// If the given value is 0 then it should return "0.00".
// You will only be given Natural Numbers as arguments.

function series_sum($n) {
    // Your code here
    $sum=0;
    for($i=0;$i<$n;$i++){
        $sum+=1/(1+3*$i);
    }
    return number_format($sum,2);
  }

  //point:先注意1/幾的規則 下一個都是n+3
  // number_format():數值格式化為指定的小數位數，並將結果轉換為字串。這個函式特別適合用來處理需要顯示固定小數位數的數值，並且它會自動進行四捨五入。

  echo series_sum(3);

?>