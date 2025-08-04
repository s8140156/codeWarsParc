<?php

// # 87 Sort Numbers

// Finish the solution so that it sorts the passed in array of numbers. If the function passes in an empty array or null/nil value then it should return an empty array.


function solution($nums) {
    if(!empty($nums)){
        sort($nums); // sort() 就地排序（in-place sort）函數，會直接修改 $nums 這個陣列的內容; 但他回傳是bool (true/false) 不是排序後的陣列本身
        // sort(array &$array, int $flags = SORT_REGULAR): true
        return $nums; // 所以要回傳排序過後的$nums
    }else{
        return [];
    }
}


// 簡潔寫法
// function solution($nums) : array {
//   $nums = $nums ?? [];
//   sort($nums);
//   return $nums;
// }

// 如果 $nums 沒有被設定（例如是 null 或根本不存在），就給它預設為空陣列 [], 否則保留原本的值
// 使用了 PHP 的「null 合併運算子（null coalescing operator）??」
// 等價
// if (!isset($nums)) {
//     $nums = [];
// }


print_r(solution([]));



?>