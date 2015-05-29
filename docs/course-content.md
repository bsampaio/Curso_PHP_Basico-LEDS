```php
  <!DOCTYPE html>
  <html>
    <head>
      <title>Curso</title>
      <meta charset="utf8"/>
    </head>
    <body>

    //New Syntax
    <?php
      $turma2 = [
        "Professor" => [
          "nome" => "Giraldelli",
          "idade" => 30,
          "qtdReprovados" => 2000,
        ],
        "Alunos" => [
          "Breno", "Marcos",
          "André", "Phillipe",
          "Ivana"
        ]
      ];
    ?>

    //Nested Arrays
    <?php
      $turma = array(
        "Professor" => array(
          "nome" => "Paulo",
          "idade" => 30,
          "qtdReprovados" => 1000,
        ),
        "Alunos" => array(
          "Breno", "Phillipe",
          "Marcos", "André"
        )
      );

      echo $turma["Professor"]["nome"];
    ?>

    //Array Key Value
    <?php
      $carro = array(
        "cor" => "preto",
        "modelo" => "Corsa",
        "ano" => "2008/1",
        "preco" => 16000.00
      );

      echo $carro["cor"]."\n";
    ?>

    //array
    <?php
      $myFirstArray = [1,2,3];
      $mySecondArray = array(
        1,2,3
      );
      var_dump($myFirstArray);
      var_dump($mySecondArray);
    ?>


    //Do-while
    <?php
      $a = 0;
      do {
        $a++;
        echo "Número {$a}\n";
      } while ($a < 10);
    ?>

    //foreach
    <?php
      $list = [1,2,3,4,5,6,7,8,9,10];
      foreach ($list as $item) {
        echo "Número {$item}\n";
      }
    ?>

    //For
    <?php
      for ($i=1; $i <= 10; $i++) {
        echo "Número {$i} \n";
      }
    ?>

    //While
    <?php
      $a = 1;
      while ($a <= 10) {
        echo "Número {$a} \n";
        $a++;
      }
    ?>

    <?php
      $variable = 'abc';
      switch ($variable) {
        case 'abc':
          echo "Sou abc! :D \n";
          break;
        default:
          echo "Não encontrado \n";
          break;
      }
    ?>

    <?php
      if(isset($variavel)):
        echo '$variavel já existe';
      else:
        echo '$variavel ainda não existe';
      endif;
    ?>

    <?php
      if(isset($variavel)){
        echo '$variavel já existe';
      }else{
        echo '$variavel ainda não existe';
      }
    ?>

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
