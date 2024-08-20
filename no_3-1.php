<?php

function score($dice)
{
    // 計數每個骰子的出現次數
    $counts = array_count_values($dice);
    
    // 初始化總分
    $totalScore = 0;
    
    // 計算三個相同數字的分數
    foreach ($counts as $num => $count) {
        if ($count >= 3) {
            // 根據骰子的值計算三個相同數字的分數
            switch ($num) {
                case 1:
                    $totalScore += 1000; // 三個 1 -> 1000 分
                    break;
                case 6:
                    $totalScore += 600; // 三個 6 -> 600 分
                    break;
                case 5:
                    $totalScore += 500; // 三個 5 -> 500 分
                    break;
                case 4:
                    $totalScore += 400; // 三個 4 -> 400 分
                    break;
                case 3:
                    $totalScore += 300; // 三個 3 -> 300 分
                    break;
                case 2:
                    $totalScore += 200; // 三個 2 -> 200 分
                    break;
            }
            // 減去已計算的三個骰子
            $counts[$num] -= 3;
        }
    }
    
    // 計算單個骰子的分數
    if (isset($counts[1])) {
        $totalScore += $counts[1] * 100; // 每個 1 -> 100 分
    }
    if (isset($counts[5])) {
        $totalScore += $counts[5] * 50;  // 每個 5 -> 50 分
    }
    
    // 返回總分
    return $totalScore;
}

// 測試例子
echo score([2, 4, 4, 5, 4]); // 預期輸出 450
?>