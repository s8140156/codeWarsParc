<?php

// #39 Area or Perimeter

// You are given the length and width of a 4-sided polygon. The polygon can either be a rectangle or a square.
// If it is a square, return its area(面積). If it is a rectangle, return its perimeter(周長).

function areaOrPerimeter (int $l, int $w){
    //Your solution
    if($l==$w){
        return $l*$w;
    }else{
        return 2*($l+$w);
    }
   }

echo areaOrPerimeter (3,4);




?>