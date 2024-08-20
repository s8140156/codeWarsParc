<?php

// #3 Greed is Good

// Greed is a dice game played with five six-sided dice. Your mission, should you choose to accept it, is to score a throw according to these rules. You will always be given an array with five six-sided dice values.

// Three 1's => 1000 points
// Three 6's =>  600 points
// Three 5's =>  500 points
// Three 4's =>  400 points
// Three 3's =>  300 points
// Three 2's =>  200 points
// One   1   =>  100 points
// One   5   =>   50 point

// A single die can only be counted once in each roll. For example, a given "5" can only count as part of a triplet (contributing to the 500 points) or as a single 50 points, but not both in the same roll.

function score($dice)
{
    $counts = array_count_values($dice);
    $totalScore = 0;

    print_r($counts);
    echo "<br>";

    foreach ($counts as $num => $count) {
        if ($count >= 3) {
            switch ($num) {
                case 1:
                    $totalScore += 1000;
                    break;
                case 2:
                    $totalScore += 200;
                    break;
                case 3:
                    $totalScore += 300;
                    break;
                case 4:
                    $totalScore += 400;
                    break;
                case 5:
                    $totalScore += 500;
                    break;
                case 6:
                    $totalScore += 600;
                    break;
            }
            $counts[$num] -= 3;
            echo $counts[$num];
            echo "<br>";


        }
    }
    if(isset($counts[1])){
        $totalScore+=$counts[1]*100;
    }
    if(isset($counts[5])){
        $totalScore+=$counts[5]*50;
    }
    return $totalScore;
}

echo "<br>";
echo score([2,4,4,5,4]);

?>