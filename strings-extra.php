<?php
  $a = '12345';

  // Funciona:
  echo "qwe{$a}rty"; //qwe12345ty
  echo "qwe" . $a . "rty"; //qwe12345ty

  // Não funciona:
  echo 'qwe{$a}rty'; // qwe{$a}rty
  echo "qwe$arty"; // qwe, $arty não existe
?>
