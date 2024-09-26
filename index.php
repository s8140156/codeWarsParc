<?php

// #57 Quarter of the year

// Given a month as an integer from 1 to 12, return to which quarter of the year it belongs as an integer number.


function quarterOf($month) {
    // Your code here
    switch(true){
        case ($month>=1 && $month<=3):
        return 1;
        break;
        case ($month>=4 && $month<=6):
        return 2;
        break;
        case ($month>=7 && $month<=9):
        return 3;
        break;
        case ($month>=10 && $month<=12):
        return 4;
        break;
        default:
        break;
    }
  }

// 計算方式
//   function quarterOf($month) {
//     return ceil($month / 3);
//            ceil()無條件進位
//   }

// function quarterOf($month) {
//     return [0,1,1,1,2,2,2,3,3,3,4,4,4][$month];
//   }
// 兩個中括號的用法實際上是一個「陣列取值」的過程
// array[index] 從陣列中取得位於 index 位置的值=>這個function最主要是使用這樣方式解答!
// 使用$month作為索引 用該月當索引對應[0,1,1,1,2,2,2,3,3,3,4,4,4]陣列裡的值
// 因為月份沒有0 所以根本不會使用到(在以月份作為索引查詢時)
// 但如果陣列裡沒有0作為開頭 會造成該陣列 索引0=>1開始喔 
// [1,1,1,2,2,2,3,3,3,4,4,4][$month - 1] 索引範圍0~11


  echo quarterOf(11);





?>