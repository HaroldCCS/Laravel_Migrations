<!-- Modal -->
<div class="modal fade" id="rentals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Renta de peliculas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('movie_rental')}}">
          @csrf
          <div>
            <input type="hidden" name="id" value="{{$count+1}}">
            
            <label>Pelicula</label>
            <select name="movie_id" class="form-control">
              @foreach($movies as $movie)
                <option value="{{$movie->id}}">{{$movie->name}}</option>
              @endforeach
            </select>
            <label>Renta a Usuario</label>
            <select name="rental_id" class="form-control">
              @foreach($rentals as $rentals)
                <option value="{{$rentals->id}}">{{$rentals->name}}</option>
              @endforeach
            </select>
            <label>Precio</label>
            <input type="text" pattern="[0-9-.]{1,7}" name="price" class="form-control" autocomplete="off" required>
            <label>Observaciones</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="observations" autocomplete="off" required></textarea>
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