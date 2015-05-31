<?php
  function getConnection(){
    try{
      $pdo = new PDO(
        'mysql:host=localhost;dbname=2do',
        'root',
        ''
      );
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    }catch (PDOException $e){
      echo 'Error: ' . $e->getMessage();
    }
  }

  function checkIfTrue($check){
    if($check == true){
      echo 'checked';
    }
  }

  function checkIfFalse($check){
    if($check == false){
      echo 'checked';
    }
  }

  function isConcluida($concluida){
    return ($concluida === 'true');
  }

?>
