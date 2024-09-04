<?php

// #45 Convert a Number to a String!
// We need a function that can transform a number (integer) into a string.

function numberToString($num)
{
  return (string)$num;
}

// function numberToString($num)
// {
//   return strval($num);
// }

$num=18;

echo gettype(numberToString($num));
echo "<br>";

var_dump($num);
echo "<br>";
//在這邊echo的都不會是使用function後的資料型態喔~
//就只是echo那個變數$num

echo gettype($num);
echo "<br>";


?>