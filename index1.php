<?php
function findMaxConsecutiveOnes($nums) {
    $maxCount = 0;
    $currentCount = 0;
    
    foreach ($nums as $num) {
        if ($num == 1) {
            $currentCount++;
            $maxCount = max($maxCount, $currentCount);
        } else {
            $currentCount = 0;
        }
    }
    
    return $maxCount;
}

// 示例用法
$array = [1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 0, 1];
$result = findMaxConsecutiveOnes($array);
echo "最大连续出现 1 的次数是：" . $result;

?>
