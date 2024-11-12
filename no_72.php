<?php

// #72 Basic Mathematical Operations

// Your task is to create a function that does four basic mathematical operations.
// The function should take three arguments - operation(string/char), value1(number), value2(number).
// The function should return result of numbers after applying the chosen operation.

// ('+', 4, 7) --> 11
// ('-', 15, 18) --> -3
// ('*', 5, 5) --> 25
// ('/', 49, 7) --> 7

function basicOp($op, $val1, $val2)
{
  // Solution
  switch(true){
    case ($op=='+'):
    return $val1+$val2;
    break;
    case ($op=='-'):
    return $val1-$val2;
    break;
    case ($op=='*'):
    return $val1*$val2;
    break;
    case ($op=='/'):
    return $val1/$val2;
    break;
  }
}

// 其實可以這樣寫
// function basicOp($op, $val1, $val2)
// {
//   switch ($op) {
//     case '+':
//       return $val1 + $val2;
//       break;
//     case '-':
//       return $val1 - $val2;
//       break;
//     case '*':
//       return $val1 * $val2;
//       break;
//     case '/':
//       return (($val1 == 0 || $val2 == 0) ? 'This operation is impossible' : ($val1 / $val2));
//       break;
//   }
// }

echo basicOp('/', 49, 7);



?>