<?php
    if(!isset($variavel)):
      echo '$variavel ainda não existe';
    elseif($variavel == 'abc' ):
      echo '$variavel já existe e é == abc';
    endif;
?>
