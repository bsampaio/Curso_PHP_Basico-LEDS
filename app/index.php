<?php
  if (session_id() === "") { session_start(); }
  include_once "reload_session.php";

  function haveTodo(){
    return (isset($_POST["descricao"]) and isset($_POST["concluida"]));
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

  if(haveTodo()){
      addTodo();
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/2do.js"></script>
  </head>
  <body>
    <header>
    </header>
    <div class="row">
      <h1 class="text-center">Bem vindo ao 2-do</h1>
    </div>
    <div id="content" class="container col-sm-8 col-sm-offset-2">
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
            <th class="col-sm-8">
              Tarefa
            </th>
            <th>
              Concluída?
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
  </body>
</html>
