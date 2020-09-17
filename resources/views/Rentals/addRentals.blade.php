<!-- Modal -->
<div class="modal fade" id="rentals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Renta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('rentals')}}">
          @csrf
          <div>
            <label>Fecha Inicio</label>
            <input type="date" name="start_date" class="form-control" autocomplete="off" required>
            <label>Fecha Final</label>
            <input type="date" min="1" class="form-control" name="end_date" autocomplete="off" required>
            <label>Total</label>
            <input type="number" min="1" class="form-control" name="total" autocomplete="off" required>
            <label>Usuario</label>
            <select name="user_id" class="form-control">
              @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
            </select>
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