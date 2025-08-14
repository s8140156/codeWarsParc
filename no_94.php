<?php

// # 94 Exclamation marks series #2: Remove all exclamation marks from the end of sentence
// Remove all exclamation marks from the "end of sentence".

function remove(string $s): string {
  return rtrim($s,'!');
}

// rtrim() 語法：去除字串右側的字元 rtrim(string[要檢查的字串],charlist[optional 規定從字串中刪除哪些字元 若省略該參數 移除下列所有字元])
// "\0" - NULL
// "\t" - 制表符
// "\n" - 换行
// "\x0B" - 垂直制表符
// "\r" - 回车
// " " - 空格

// ltrim() 語法：去除字串左側的字元
// trim() 語法：去除開頭與結尾(前後)字元

echo remove('!Hi! Hi!');


?>