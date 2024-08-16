<?php

function setAlarm(bool $employed, bool $vacation): bool {
    // your code here
    if($employed==true && $vacation==false){
        return true;
    }else{
        return false;
    }
  }

echo setAlarm(true,true)?'true':'false';

// function setAlarm(bool $employed, bool $vacation): bool {
//     return $employed && !$vacation;
//   }


?>