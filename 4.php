<?php
  
  $numbers = array(rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100));
  function second_max_value(){
    global $numbers;
    return $numbers[1];
  }
  for ($i = 0; $i < count($numbers); $i++){
    echo ((string)($numbers[$i])) . " ";
  }
  echo "\n";
  echo second_max_value();
  
?>