<?php

// #71 Who likes it?

// You probably know the "like" system from Facebook and other pages. People can "like" blog posts, pictures or other items. We want to create the text that should be displayed next to such an item.
// Implement the function which takes an array containing the names of people that like an item. It must return the display text as shown in the examples:

// []                                -->  "no one likes this"
// ["Peter"]                         -->  "Peter likes this"
// ["Jacob", "Alex"]                 -->  "Jacob and Alex like this"
// ["Max", "John", "Mark"]           -->  "Max, John and Mark like this"
// ["Alex", "Jacob", "Mark", "Max"]  -->  "Alex, Jacob and 2 others like this"

function likes( $names ) {
    // Your code here...
    if(empty($names)){
        return "no one likes this";
    }
    switch(true){
        case (count($names)==1):
        return $names[0]." likes this";
        break;
        case (count($names)==2):
        return $names[0] . " and " . $names[1] . " like this";
        break;
        case (count($names)==3):
        return $names[0] . ", " . $names[1] . " and " . $names[2] . " like this";
        break;
        default:
        return $names[0] . ", " . $names[1] . " and " . (count($names)-2) . " others like this";
        break;
        // 原本是寫case count($names)>=4 但其實可以用default顯示其他的(剩下的)即可
        // 已經想出使用count()算"數量"了 不用再糾結 是要扣掉第一個、第二個 就是“減2個”就對了 XD
    }
}

// 簡潔寫法

// function likes( $names ) {
//     switch (count($names)) {
//       case 0: return 'no one likes this';
//       case 1: return sprintf('%s likes this', $names[0]);
//       case 2: return sprintf('%s and %s like this', $names[0], $names[1]);
//       case 3: return sprintf('%s, %s and %s like this', $names[0], $names[1], $names[2]);
//       default: return sprintf('%s, %s and %d others like this', $names[0], $names[1], count($names) - 2);
//     }
// }

// sprintf():用來格式化字串，使程式碼更具可讀性。%s 是字串的佔位符，%d 是整數的佔位符。

// 另一種寫法(其實count($names)可以寫在switch()裡)

// function likes( $names ) {
//     switch ($n = count($names)) {
//       case 0:
//         return "no one likes this";
        
//       case 1:
//         return "$names[0] likes this";
  
//       case 2:
//         return "$names[0] and $names[1] like this";
        
//       case 3:
//         return "$names[0], $names[1] and $names[2] like this";
        
//       default:
//         $n -= 2;
//         return "$names[0], $names[1] and $n others like this";
//     }
//   }


$names=['Alex', 'Jacob', 'Mark', 'Max' ];
echo likes($names);





?>