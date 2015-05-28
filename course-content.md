```php
  <!DOCTYPE html>
  <html>
    <head>
      <title>Curso</title>
      <meta charset="utf8"/>
    </head>
    <body>

    <?php
      $a = 3;
      $a += 5; // configura $a para 8, como se disséssemos: $a = $a + 5;
      $b = "Bom ";
      $b .= "Dia!"; // configura $b para "Bom Dia!", como em $b = $b . "Dia!";
    ?>
    <?php
      $a = '12345';
      // Funciona:
      echo "qwe{$a}rty"; //qwe12345ty
      echo "qwe" . $a . "rty"; //qwe12345ty
      // Não funciona:
      echo 'qwe{$a}rty'; // qwe{$a}rty
      echo "qwe$arty"; // qwe, $arty não existe
    ?>


    <?php
      echo "do" . "ze"; //imprime a string "doze"
      echo 1 . 2; //imprime a string "12"
      echo 1.2;  //imprime o float 1.2
      echo 1+2;  //imprime o int 3
    ?>

    <?php
      $var_int = 1;
      $var_string = '2';
      $var_confusao1 = $var_string + $var_int;
      $var_confusao2 = $var_string . $var_int;

      var_dump($var_confusao1);
      var_dump($var_confusao2);
    ?>
    <?php
      $var = 'Bob';
      $Var = 'Joe';
      echo "$var, $Var";      // exibe "Bob, Joe"

      $4site = 'not yet';     // inválido; começa com um número
      $_4site = 'not yet';    // válido; começa com um sublinhado
      $täyte = 'mansikka';    // válido; 'ä' é um caracter ASCII (extendido) 228
    ?>

    <?php
      $a = "Olá ";
      $b = $a . "mundo!"; // agora $b contém "Olá mundo!"

      $a = "Olá ";
      $a .= "mundo!";     // agora $a contém "Olá mundo!"
    ?>
    </body>
  </html>
```
