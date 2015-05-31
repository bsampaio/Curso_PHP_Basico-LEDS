<?php

$pdo = new PDO(
  'mysql:host=localhost;dbname=2do',
  'root',
  ''
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM todos");
$stmt->execute();

$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
  foreach ($todos as $index => $todo) {
?>
    <tr>
      <td><?= $todo["id"] ?> </td>
      <td><?= $todo["descricao"] ?> </td>
      <td>
        <?php
          if($todo["concluida"] == true):
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <!-- Editar -->
              <?php include "./edit-modal.php" ?>
            </div>
            <div class="col-sm-6">
              <!-- Excluir -->
              <form class="" action="./delete.php" method="post">
                <input type="hidden" name="todo_id" value="<?= $todo["id"] ?>">
                <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
            </div>
          </div>
        </div>
      </td>
    </tr>
<?php
  }
?>
