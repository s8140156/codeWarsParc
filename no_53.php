<?php

// #53 Simple Encryption #1 - Alternating Split
// Implement a pseudo-encryption algorithm which given a string S and an integer N concatenates all the odd-indexed characters of S with all the even-indexed characters of S, this process should be repeated N times.

// Together with the encryption function, you should also implement a decryption function which reverses the process.
// If the string S is an empty value or the integer N is not positive, return the first argument without changes.


function encrypt($text, $n) {
    if($n<=0 || $n==''){
        return $text;
    }

    for($i=0;$i<$n;$i++){
        $oddChars='';
        $evenChars='';
        for($j=0;$j<strlen($text);$j++){
            if($j%2==0){
                $evenChars.=$text[$j];
            }else{
                $oddChars.=$text[$j];
            }
        }
        $text=$oddChars.$evenChars;
        // 每次迭代都要更新 $text，這樣下一次迭代可以使用新字串
        // 每次迭代後，用 $text = $oddChars . $evenChars; 更新 $text，以便在下一次變換時使用新的字串
        // 這樣在執行多次變換時，每次的結果都會基於上一次的結果進行處理，而不是基於最初的輸入
    }
    return $text;
}

function decrypt($text, $n) {
    if($n<=0 || $n==''){
        return $text;
    }
    $len=strlen($text);
    for($i=0;$i<$n;$i++){
        $half=floor($len/2); // 計算前半部分（奇數字符的長度）
        $odd_chars=substr($text,0,$half); // 奇數"索引"
        $even_chars=substr($text,$half); // 偶數"索引"
        
        $text='';
        $oddIndex=0;
        $evenIndex=0;
        for($j=0;$j<$len;$j++){
            if($j%2==0){
                $text.=$even_chars[$evenIndex++];
            }else{
                $text.=$odd_chars[$oddIndex++];
            }
        }
    }
    return $text;
}

$text="This is a test";
$n=1;
echo decrypt($text, $n);



?>