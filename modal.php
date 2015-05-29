<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newTodoModal">
  Cadastrar
</button>

<div id="newTodoModal" class="modal fade bs-example-modal-sm"
     tabindex="-1"
     role="dialog"
     aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Cadastro de Tarefa</h4>
      </div>
      <form id="newTodo" action="./" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input class="form-control" type="text" name="descricao"/>
          </div>

          <div class="form-group">
            <label for="concluida">Concluida:</label>
            <i class="glyphicon glyphicon-ok text-success"></i>
            <input type="radio" name="concluida" value="true"/>
            <i class="glyphicon glyphicon-remove text-danger"></i>
            <input type="radio" name="concluida" value="false" checked/>
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
