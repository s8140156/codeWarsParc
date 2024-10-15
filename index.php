<?php

// #62 Count the Digit

// Take an integer n (n >= 0) and a digit d (0 <= d <= 9) as an integer.
// Square all numbers k (0 <= k <= n) between 0 and n.
// Count the numbers of digits d used in the writing of all the k**2.
// Implement the function taking n and d as parameters and returning this count.
// 注意 自己有弄錯題意 以為是列出有$d的數字陣列出來 =>不是 是計算有多少個$d的次數

function nbDig($n, $d) {
    // your code
    $count=0;
    $dStr=(string)$d;
    for($i=0;$i<=$n;$i++){
        $square=$i*$i;
        $squareStr=(string)$square;
        $count+=substr_count($squareStr,$dStr);
        // substr_count()：用來計算字串中指定字元出現的次數，這裡用來計算平方後的數字包含 d 的次數
    }
    return $count;
}

//另一種寫法
// function nbDig($n, $d) {
//     $string = "";
//     for ($x=0; $x <= $n; $string .= ($x++)**2);
//  $string .= ($x++)**2; 的作用是在每次迴圈執行時，將 $x 的平方結果拼接到 $string 字串後面
//     return substr_count($string,$d);
//   }

echo nbDig(5750, 0);



?>