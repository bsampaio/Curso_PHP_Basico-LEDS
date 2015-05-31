<?php
  require_once "functions.php";

  $id = $_POST["todo_id"];
  $concluida = isConcluida($_POST["todo_concluida"]);
  $descricao = $_POST["todo_descricao"];

  try{
    $pdo = getConnection();
    $query = 'UPDATE todos SET descricao = :descricao, concluida = :concluida '.
             'WHERE id = :id';
    $stmt = $pdo->prepare($query);
    $stmt->execute(array(
      ':id' => $id,
      ':descricao' => $descricao,
      ':concluida' => $concluida
    ));

    header('location: ./?concuida='.$_POST["todo_concluida"]);
  }catch (PDOException $e){
    echo "Error: " . $e->getMessage();
  }
?>
