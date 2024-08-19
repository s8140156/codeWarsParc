<?php

function duplicateCount($text) {
    // ...
    $text=strtolower($text); //轉換字串字母大小寫 改成全小寫
    $characters=str_split($text);
    // print_r($characters);
    // echo "<br>";
    $counts=array_count_values($characters);
    
    // print_r($counts);
    // Array ( [a] => 2 [b] => 2 [c] => 2 [d] => 1 )
    // echo "<br>";
    
    $chCount = 0;
    foreach($counts as $count){
      // echo $count;
      // 2221
      if($count>1){
        $chCount++;

      }
    }
    return $chCount;
  }

  $text="Aabbccd";
  echo duplicateCount($text);






?>