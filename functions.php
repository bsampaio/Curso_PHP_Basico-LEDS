<?php
  function getConnection(){
    try{
      $herokuDbUrl = getenv("CLEARDB_DATABASE_URL");
      if (isset($herokuDbUrl)) {
        $url = parse_url($herokuDbUrl);

        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $db = substr($url["path"], 1);

        $pdo = new PDO(
          $server . ';' . $db,
          $username,
          $password,
        );

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
      }

      // If is localhost
      $pdo = new PDO(
        'mysql:host=localhost;dbname=2do',
        'root',
        ''
      );
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
<<<<<<< HEAD

=======

>>>>>>> c4a79f27a12dc572dd1fee33384fd1dd08a62e8c
    }catch (PDOException $e){
      echo 'Error: ' . $e->getMessage();
      die('Can\'t connect to database');
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
