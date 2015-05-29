<?php
  if (session_id() === "") { session_start(); }
  include_once "reload_session.php";

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

?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/custom.css" charset="utf-8">

  </head>
  <body>
    <header>
    </header>
    <div id="content" class="container col-sm-8 col-sm-offset-2">
      <div class="row jumbotron">
        <h1 class="text-center">Bem vindo ao 2-do</h1>
      </div>
      <div class="row">
        <div class="pull-left">
          <form class="" action="./" method="post">
            <input type="hidden" name="reload-session" value="true">
            <button type="submit" class="btn btn-danger">Limpar</button>
          </form>
        </div>
        <div class="pull-right">
          <?php include_once "./modal.php" ?>
        </div>
      </div>
      <div class="row spaced">
        <table id="tarefas" class="table table-bordered table-responsive table-hover table-striped">
          <thead>
            <th class="col-sm-1">
              Id
            </th>
            <th class="col-sm-6">
              Tarefa
            </th>
            <th class="col-sm-2">
              Concluída?
            </th>
            <th>
              Ações
            </th>
          </thead>
          <tbody>
            <?php if(isset($_SESSION["Todos"])): ?>
              <?php
                foreach ($_SESSION["Todos"] as $id => $todo) {
              ?>
                  <tr>
                    <td><?= $id ?> </td>
                    <td><?= $todo["descricao"] ?> </td>
                    <td>
                      <?php
                        if($todo["concluida"] == 'true'):
                      ?>
                        <span class="glyphicon glyphicon-ok text-success"></span>
                      <?php
                        else:
                      ?>
                        <span class="glyphicon glyphicon-remove text-danger"></span>
                      <?php
                        endif;
                      ?>
                    </td>
                    <td>
                      <!-- Editar -->
                      <?php include "./edit-modal.php" ?>
                    </td>
                  </tr>
              <?php
                }
              ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

    </div>
    <footer>

    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/2do.js"></script>
  </body>
</html>
