<?php

// #75 Check the exam

// The first input array is the key to the correct answers to an exam, like ["a", "a", "b", "d"]. The second one contains a student's submitted answers.
// The two arrays are not empty and are the same length. Return the score for this array of answers, giving +4 for each correct answer, -1 for each incorrect answer, and +0 for each blank answer, represented as an empty string (in C the space character is used).
// If the score < 0, return 0.

function checkExam(array $array1, array $array2): int{

    $score = 0;
    $length = max(count($array1), count($array2));
    // $array1=array_pad($array1,$length,'');
    // $array2=array_pad($array2,$length,'');

    for ($i = 0; $i < $length; $i++) {
        if ($array2[$i] === '') {
            $score += 0;
        } else if ($array1[$i] == $array2[$i]) {
            $score += 4;
        } else {
            $score -= 1;
        }
    }
    if($score>0){
        return $score;
    }else{
        return 0; // your code here
    }
}

// 計算迴圈數量別的網友寫法 直接count(array1)

// function checkExam(array $array1, array $array2): int{
//     $total_point = 0;
//     for($i = 0;$i<count($array1);$i++){
//       if($array2[$i] === ""){
//         $total_point += 0;
//       }elseif($array1[$i] === $array2[$i]){
//           $total_point += 4;
//       }elseif($array1[$i] !== $array2[$i]){
//           $total_point -= 1;
//       }
//     }
//     if($total_point < 0){
//       $total_point = 0;
//     }
//     return $total_point;
//   }

$array1=["a", "a", "b", "c"];
$array2=["a", "a", "b", "c"];

echo checkExam($array1,$array2);

?>
