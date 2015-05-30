<?php
  if (session_id() === "") { session_start(); }
  include_once "./reload_session.php";
  include_once "./functions.php";

  onLoad();
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
                    <td class="text-center">
                      <!-- Editar -->
                      <?php include "./edit-modal.php" ?>
                      <!-- Excluir -->
                      <form class="" action="./delete.php" method="post">
                        <input type="hidden" name="todo_id" value="<?=$id?>">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                      </form>
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
