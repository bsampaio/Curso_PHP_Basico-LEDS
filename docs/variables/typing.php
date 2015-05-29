<?php
  $var_int = 1;
  $var_string = '2';
  $var_confusao1 = $var_string + $var_int;
  $var_confusao2 = $var_string . $var_int;

  var_dump($var_confusao1);
  var_dump($var_confusao2);
?>
