<button type="button" class="btn btn-primary"
  data-toggle="modal" data-target="#editTodoModal<?=$id?>">
  Editar
</button>

<div id="editTodoModal<?=$id?>" class="modal fade bs-example-modal-sm"
     tabindex="-1"
     role="dialog"
     aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
  <div id="editTodo" class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Cadastro de Tarefa</h4>
      </div>
      <form id="editTodo" action="./" method="post">
        <div class="modal-body">
          <input type="hidden" name="todo_id" value="<?=$id?>">
          <?php
            $checked = 'checked';
          ?>
          <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input class="form-control" type="text" name="todo_descricao"
              value="<?=$todo["descricao"]?>"/>
          </div>

          <div class="form-group">
            <label for="concluida">Concluida:</label>
            <i class="glyphicon glyphicon-ok text-success"></i>
            <input type="radio" name="todo_concluida" value="true" <?php checkIfTrue($todo["concluida"]); ?>/>
            <i class="glyphicon glyphicon-remove text-danger"></i>
            <input type="radio" name="todo_concluida" value="false" <?php checkIfFalse($todo["concluida"]); ?>/>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
