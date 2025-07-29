<?php

// #86 Removing Elements

// Take an array and remove every second element from the array. Always keep the first element and start removing with the next element
// Example:["Keep", "Remove", "Keep", "Remove", "Keep", ...] --> ["Keep", "Keep", "Keep", ...]

function removeEveryOther($array) {
  $result=[];
  foreach($array as $idx => $value){
    if($idx % 2 == 0){
        $result[$idx]=$value;
    }
  }
  return $result;
}
// 這個好玩的是 雖然題目是不要偶數的元素 但實際是用選index %2 餘數0 做保留(ex.index 0,2,4...保留)
// 注意是用index篩選 但是把"值 value"放進陣列裡
// 原先寫$result[]=$value; => 會將index重新編排 ex.[0 => 1, 1 => 5, 2 => 9]
// $result[$idx]=$value; => 保留原index ex.[0 => 1, 2 => 5, 4 =>9]

print_r(removeEveryOther([1,3,5,7,9,11]));



?>