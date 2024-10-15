<?php

// #61 Growth of a Population

// In a small town the population is p0 = 1000 at the beginning of a year. The population regularly increases by 2 percent per year and moreover 50 new inhabitants per year come to live in the town. How many years does the town need to see its population greater than or equal to p = 1200 inhabitants?
// p0, percent, aug (inhabitants coming or leaving each year), p (population to equal or surpass)
// the function nb_year should return n number of entire years needed to get a population greater or equal to p.
// aug is an integer, percent a positive or null floating number, p0 and p are positive integers (> 0)


function nbYear($p0, $percent, $aug, $p) {
    // your code
    $year=0;
    while($p0<$p){
        $p0=floor($p0+$p0*($percent/100)+$aug);
        $year++;
    }
    return $year;
    // 這次出了一個白痴包 居然把return寫成echo = =
    // 造成testing會顯示Failed asserting that null is identical to 15 返回null(函數沒有正確返回值)而不是15
}

// 用for寫法
// function nbYear($p0, $percent, $aug, $p) {
//     for ($year = 0; $p0 < $p; $year++){
//             $p0 += intval($p0 * ($percent/100) + $aug);
//         }
//         return $year;
// }

echo nbYear(1500000, 2.5, 10000, 2000000);




?>