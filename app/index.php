<?php
  session_start();

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
    <style>
      #content {
        margin: 0px auto;
        text-align: center;
      }

      #tarefas {
        width: 580px;
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        background-color: #707070;
      }

      th, tr, td {
        text-align: center;
      }

      #newTodo {
        margin-top: 20px;
      }

    </style>
  </head>
  <body>
    <header>
    </header>
    <div id="content">
      <h2>Bem vindo ao 2-do</h2>
      <table id="tarefas">
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
      <form id="newTodo" action="./" method="post">
            <label for="descricao">Descricao:</label>
            <input type="text" name="descricao"/>

            <label for="concluida">Concluida:</label>
            Sim
            <input type="radio" name="concluida" value="true"/>
            Nao
            <input type="radio" name="concluida" value="false" checked/>

            <input type="submit" name="send" value="Salvar"/>
      </form>
    </div>
    <footer>
    </footer>
  </body>
</html>
