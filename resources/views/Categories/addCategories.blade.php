<!-- Modal -->
<div class="modal fade" id="rentals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('categories')}}">
          @csrf
          <div>
            <label>Nombre categoria:</label>
            <input type="text" name="name" class="form-control" autocomplete="off" required>
            <label>Estatus</label>
            <select name="status_id" class="form-control">
              @foreach($statuses as $status)
                <option value="{{$status->id}}">{{$status->name}}</option>
              @endforeach
            </select>
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