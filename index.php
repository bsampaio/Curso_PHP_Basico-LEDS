<?php
  include_once "./functions.php";
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
        <div class="pull-right">
          <?php include_once "./new-todo-modal.php" ?>
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
            <?php include "./select-todos.php" ?>
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
