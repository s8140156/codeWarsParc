<?php

// #44 Find the odd int

// Given an array of integers, find the one that appears an odd number of times.
// There will always be only one integer that appears an odd number of times.

// Examples
// [1,1,2] should return 2, because it occurs 1 time (which is odd).
// [0] should return 0, because it occurs 1 time (which is odd).

function findIt(array $seq): int
{
    // Enter your code here
    $counts = array_count_values($seq);
    foreach ($counts as $key => $num) {
        if ($num % 2 == 1) {
            return $key;
        }
    }
}

$seq=[10];
echo findIt($seq);



?>