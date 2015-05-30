<?php
  function newTodo(){
    return (
      isset($_POST["descricao"]) and
      isset($_POST["concluida"]) and
      !isset($_POST["id"])
    );
  }

  function addTodo(){
    $to_do = [
      "descricao" => $_POST["descricao"],
      "concluida" => $_POST["concluida"]
    ];
    if(!isset($_SESSION["Todos"])){
      $_SESSION["Todos"] = [];
      array_push($_SESSION["Todos"],$to_do);
    }else{
      array_push($_SESSION["Todos"],$to_do);
    }
  }

  function hasTodo(){

    if(!isset($_POST["todo_id"])){
      return false;
    }

    $todo_id = $_POST["todo_id"];
    return isset($_SESSION["Todos"][$todo_id]);
  }

  function editTodo($todo = null){
    if(!$todo){
      return false;
    }
    $currentTodo = &$_SESSION["Todos"][$todo["id"]];
    return setTodo($currentTodo, $todo);
  }

  function setTodo(&$currentTodo, $todo){
    $operation = ($currentTodo["descricao"] = $todo["descricao"]);
    $operation = $operation and ($currentTodo["concluida"] = $todo["concluida"]);
    return $operation;
  }

  function checkIfTrue($check){
    if($check == 'true'){
      echo 'checked';
    }
  }

  function checkIfFalse($check){
    if($check == 'false'){
      echo 'checked';
    }
  }

  function onLoad(){
    if(newTodo()){
      addTodo();
    }else if(hasTodo()){
      $todo = [
          "id" => $_POST["todo_id"],
          "descricao" => $_POST["todo_descricao"],
          "concluida" => $_POST["todo_concluida"]
      ];
      editTodo($todo);
    }
  }
?>
