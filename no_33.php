<?php

// #33 Convert a Boolean to a String

// Implement a function which convert the given boolean value into its string representation.
// Note: Only valid inputs will be given.

function booleanToString($b) {
    // your code here
    if($b==true){
        return "true";
    }else{
        return "false";
    }
  }

//   function booleanToString($b) {
//     return $b ? "true" : "false";
//   }

  $b=false;

  echo booleanToString($b);



?>