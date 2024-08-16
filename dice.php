<?php

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