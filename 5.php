<?php
  function max_number_characters($word){
    $len = strlen($word);
    // I assume that uppercase and lowercase is the same
    $word = strtolower($word);
    $max = 0;
    $index = 0;
    $ctr = 1;
    for ($i = 1; $i < $len; $i++ ){
      if ($word[$i] == $word[$i - 1]){
        $ctr++;
      }
      else{
        if ($ctr > $max){
          $max = $ctr;
          $index = $i - 1;
        }
        $ctr = 1;
      }
    }
    return $word[$index] . " " . $max . "x";
  }

  echo max_number_characters("wellcome");
  echo "\n";
  echo max_number_characters("strawberry");
?>