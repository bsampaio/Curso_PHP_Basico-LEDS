<?php
  include_once "functions.php";

  $concluida = isConcluida($_POST['concluida']);
  $descricao = $_POST['descricao'];

  try{
    $pdo = getConnection();

    $stmt = $pdo->prepare('INSERT INTO todos (descricao, concluida) VALUES (:descricao, :concluida)');
    $stmt->execute(array(
      ':descricao' => $descricao,
      ':concluida' => $concluida
    ));

    echo $stmt->rowCount();
    header('location: ./');
  }catch (PDOException $e){
    echo 'Error: ' . $e->getMessage();
  }
?>
