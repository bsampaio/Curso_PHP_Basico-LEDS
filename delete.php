<?php
  require_once "functions.php";

  $id = $_POST["todo_id"];

  $pdo = getConnection();
  $query = 'DELETE FROM todos WHERE id = :id';
  $stmt = $pdo->prepare($query);
  $stmt->execute(array(
    ':id' => $id
  ));

  header("location: ./");
?>
