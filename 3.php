<?php
  $colors = array("Merah", "Kuning", "Hijau");
  function red_yellow_green(){
    static $ctr = 0;
    global $colors;
    $ctr++;
    return $colors[($ctr - 1) % 3];
  }
  
  echo red_yellow_green();
  echo "\n";
  echo red_yellow_green();
  echo "\n";
  echo red_yellow_green();
  echo "\n";
  echo red_yellow_green();
  echo "\n";
?>