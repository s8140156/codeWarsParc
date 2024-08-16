<?php

function enough($cap, $on, $wait) {
    // your code here
    if($on+$wait<=$cap){
        return 0;
    }else{
        return ($on+$wait)-$cap;
    }
  }

  $cap=10;
  $on=8;
  $wait=7;

  echo enough($cap,$on,$wait);

//   function enough($cap, $on, $wait) {
//     return $cap >= ($on + $wait) ? 0 : ($wait - ($cap - $on));
//   }



?>