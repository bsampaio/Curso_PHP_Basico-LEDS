<?php
  if (session_id() === "") { session_start(); }

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
    <meta charset="utf8"/>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.css" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
  </head>
  <body>
    <header>
    </header>
    <div class="row">
      <h2 class="text-center">Bem vindo ao 2-do</h2>
    </div>
    <div id="content" class="container">
      <div class="row">
        <form id="newTodo" action="./" method="post" class="form-inline">
            <div class="form-group">
              <label for="descricao">Descricao:</label>
              <input class="form-control" type="text" name="descricao"/>
            </div>

            <div class="form-group">
              <label for="concluida">Concluida:</label>
              Sim
              <input type="radio" name="concluida" value="true"/>
              Nao
              <input type="radio" name="concluida" value="false" checked/>
            </div>
            <div class="form-group">
              <input type="submit" name="send" value="Salvar"/>
            </div>
        </form>
      </div>
      <div class="row">
        <table id="tarefas" class="table table-bordered table-responsive table-hover table-striped">
          <thead>
            <th>
              Id
            </th>
            <th>
              Tarefa
            </th>
            <th>
              Concluida?
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
                    <td><?= $todo["concluida"] ?> </td>
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
