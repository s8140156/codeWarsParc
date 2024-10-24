<?php

// #64 String ends with?

// Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).
// solution('abc', 'bc') // returns true
// solution('abc', 'd') // returns false


function solution($str, $ending) {
    // TODO: complete
    if($ending==''){
        return true;
        // 如果 $ending 是空字串，因為任何字串都可以結尾於空字串，因此直接回傳 true
    }
    return substr($str,-strlen($ending))===$ending;
    // substr():第二個參數- 是從字串抹端返回
  }

  // 使用str_ends_with()
  // function solution(string $str, string $ending): bool {
  //   return str_ends_with($str, $ending);
  // }

  echo solution("abcd", "cd")?'true':'false';





?>