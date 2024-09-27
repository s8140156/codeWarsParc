<?php

// #58 Unique In Order
// Implement the function unique_in_order which takes as argument a sequence and returns a list of items without any elements with the same value next to each other and preserving the original order of elements.

// uniqueInOrder("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'} input是字串
// uniqueInOrder("ABBCcAD")         == {'A', 'B', 'C', 'c', 'A', 'D'}
// uniqueInOrder([1,2,2,3,3])       == {1,2,3} input是陣列

function uniqueInOrder($iterable){
    
    if(empty($iterable)){
        return [];
    }
    // 在做codewar檢測時 程式順序很重要 要先檢查是否有空陣列 不然第一關(檢查空陣列)不會過
    if(is_string($iterable)){
        $iterable=str_split($iterable);
        // print_r($iterable); //檢查用
        // echo "<br>";
    }
    // 依據題意 input有字串或陣列 所以要判斷如果是字串時 要先拆解字串成一個陣列
    $ret=[];
    $prev=null; //先宣告一個空值 當第一個比較

    foreach($iterable as $item){
        if($item!==$prev){
            $ret[]=$item;
            $prev=$item; // 將當前值設為前一個值 任何值都會和 null 不相等 從而正確地將第一個元素加入$ret陣列(只在第一次迴圈生效)
        }
    }
    return $ret;
  }

//   $iterable='AAAABBBCCDAABBB';
  $iterable='ABBcCAD';
//   $iterable=[1, 2, 2, 3, 3];
  print_r(uniqueInOrder($iterable));
//   echo uniqueInOrder($iterable); //沒辦法這樣寫




?>