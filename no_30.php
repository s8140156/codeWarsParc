<?php

// #30 Convert boolean values to strings 'Yes' or 'No'.

// Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false.


function boolToWord($bool){
        return $bool? "Yes" : "No";
    }

$bool=true;
echo boolToWord($bool);

?>