<?php

// # 47 Grasshopper - Check for factor

// This function should test if the factor is a factor of base.
// Return true if it is a factor or false if it is not.

function checkForFactor($base, $factor) {
    // your code here
    if($base%$factor==0){
        return true;
    }else{
        return false;
    }
  }

  echo checkForFactor(11, 2)?'true':'false';


?>