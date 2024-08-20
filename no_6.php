<?php

// #6 Convert a String to a Number!

// We need a function that can transform a string into a number. What ways of achieving this do you know?
// Note: Don't worry, all inputs will be strings, and every string is a perfectly valid representation of an integral number.

$a = "123abc"; 
$b = $a + 2;
echo "\$b=$b"."<br>";
echo "\$a=$a";
$a = $a + 2;
echo "\$a=$a"."<br>";

function stringToNumber1($str) {
    // do stuff
    return "\$str=$str";
  }

  $str='789';
  echo stringToNumber1($str)."<br>";
  //echo出來是$str=789整個

// ----------------------------------------

  function stringToNumber($str) {
    $num=intval($str);
    return $num;
  }

$str='12378967abc';
$num=stringToNumber($str);
echo $num."<br>";

if(is_int($num)){
    echo "是整數<br>";
}else{
    echo "不是整數";

}

if(is_numeric($num)){
    echo "是整數<br>";
}else{
    echo "不是整數";

}
//----------------------------------------

function stringToNumber2($str) {
    return $str / 1;
  }
  //PHP 会在执行"算术运算"时自动将"字符串转换为数值"类型。因此，将字符串除以 1 可以强制将其转换为数字。
  
  // 使用例子
  $str = "123";
  $number = stringToNumber2($str);
  echo $number; // 输出：123


?>


