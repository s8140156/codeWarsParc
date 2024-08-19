<?php

function longestConsec($strarr, $k) {
    // your code
    if($k<=0 || $k>count($strarr)){
        return "";
    }

    $maxLen=0;
    $maxStr="";
    if($k==1){
        foreach($strarr as $str){
            if(strlen($str)>$maxLen){
                $maxLen=strlen($str);
                $maxStr=$str;
            }
        }
    }else{
        for($i=0;$i<=count($strarr)-$k;$i++){
            $currentStr="";
            for($j=0;$j<$k;$j++){ //這個$j是指整個大陣列($i=>index=0)外圈跑到該index時 就是那個$j;這是$j的位置然後要加多少$k個$j
                $currentStr .=$strarr[$i+$j];
            }
            if(strlen($currentStr)>$maxLen){
                $maxLen=strlen($currentStr);
                $maxStr=$currentStr;
            }
        }
    }
    return $maxStr;
}

$strArr = ['applenanananana', 'banana', 'cat', 'tomorrrrrow'];
echo longestConsec($strArr, 2)."<br>"; // 輸出 'cattomorrrrrow'
echo longestConsec($strArr, 1); // 輸出 'tomorrrrrow'

// function longestConsec($strarr, $k) {
//     $longest = '';

//     for ($i = 0; $i <= count($strarr) - $k; $i++) {
//         $string = '';
    
//         for ($j = 0; $j < $k; $j++) {
//             $string .= $strarr[$i + $j];
//         }
        
//         if (strlen($string) > strlen($longest)) {
//             $longest = $string;
//         }
//     }
    
//     return $longest;
// }

?>