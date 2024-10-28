<?php

// #69 MakeUpperCase
// Write a function which converts the input string to uppercase.

function makeUpperCase(string $input): string {
    return strtoupper($input);
  }

  // strtoupper():字串轉大寫
  // strtolower():字串轉小寫

  $input="you have to be kidding.";
  echo makeUpperCase($input);






?>