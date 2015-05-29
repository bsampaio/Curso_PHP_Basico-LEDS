<?php
  if(isset($_POST["reload-session"])){
    if (isset($_SESSION["Todos"])) {
      unset($_SESSION["Todos"]);
    }
  }
?>
