<?php

// #54 Complementary DNA

// In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". Your function receives one side of the DNA (string, except for Haskell); you need to return the other complementary side. DNA strand is never empty or there is no DNA at all (again, except for Haskell).
//ex. "ATTGC" --> "TAACG"

function DNA_strand($dna) {
    // return strtr($dna,['A'=>'T','T'=>'A','C'=>'G','G'=>'C']);
    return strtr($dna, 'ACGT', 'TGCA'); //也可以這樣寫
}

// strtr()是可以“一次性對應並替換多組字符”; 每個字符只會被替換一次，替換過程中不會互相影響

// 使用判斷方式
// function DNA_strand($dna) {
//     foreach(str_split($dna) as $val){
//       if($val == "A") $str .= "T";
//       if($val == "T") $str .= "A";
//       if($val == "C") $str .= "G";
//       if($val == "G") $str .= "C";
//     }
//     return $str;
//   }



//以下會造成替換不完全狀況
//str_replace():會先由"左至右依序"A->T, C->G然後結束。但如果字串有T or G的就會遺漏沒有換到
//即使將替換陣列補齊 也會造成上述變一輪後 結果又全部顛倒再一次變換

// function DNA_strand($dna) {
//     // Your code here
//     $cha=['A','C'];
//     $rep=['T','G'];

//     return str_replace($cha,$rep,$dna);

//   }

  $dna='TAACG';
  echo DNA_strand($dna);





?>