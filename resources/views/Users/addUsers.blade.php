<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('users')}}">
          @csrf
          <div>
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" autocomplete="off" required>
            <label>Correo</label>
            <input type="email" name="email" class="form-control" autocomplete="off" required>
            <label>Password</label>
            <input type="password" name="password" class="form-control" autocomplete="off" required>
            <label>status_id</label>
            <input type="number" min="1" class="form-control" name="status_id" autocomplete="off" required>
            <label>role_id</label>
            <input type="number" min="1" class="form-control" name="role_id" autocomplete="off" required>
          </div>
        
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>