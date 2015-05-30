<?php
  session_start();
  $todo_id = $_POST["todo_id"];
  unset($_SESSION["Todos"][$todo_id]);
  header("location:./");
?>
