<?php
  $arr = [];
  function generate($user){
    global $arr;
    $randomString = "";
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ($i = 0; $i < 10; $i++){
      $randomString .= $characters[rand(0, strlen($characters) -1)];
    }
    if (array_key_exists($user, $arr)){
      for ($i = 0; $i < 10; $i++){
        if ($arr[$user][$i] == ""){
          $arr[$user][$i] = $randomString;
          return;
        }
      }
      $arr[$user][0] = $randomString;
    }
    else {
      $arr[$user] = array_fill(0, 10, "");
      $arr[$user][0] = $randomString;
    }
  }
  
  function verify_token($user, $token){
    global $arr;
    if (array_key_exists($user, $arr)){
      if (in_array($token, $arr[$user])){
        $arr[$user][array_search($token, $arr[$user])] = "";
        return true;
      }
    }
    return false;
  }
  echo verify_token("test", "asdasdasd") ? "true" : "false";
  echo "\n";
  generate("test");
  echo $arr["test"][0];
  echo "\n";
  echo verify_token("test", $arr["test"][0]) ? "true" : "false";
  echo "\n";
  echo $arr["test"][0];
?>