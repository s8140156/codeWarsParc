<?php

// #59 Grasshopper - Messi goals function
// Complete the function to return his total number of goals in all three leagues.

function goals (int $laLigaGoals, int $copaDelReyGoals, int $championsLeagueGoals) : int {
    // code goes here
    return $laLigaGoals+$copaDelReyGoals+$championsLeagueGoals;
  }

  echo goals(10,20,30);



?>