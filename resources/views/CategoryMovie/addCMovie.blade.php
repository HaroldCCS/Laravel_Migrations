<!-- Modal -->
<div class="modal fade" id="rentals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Categoria a Pelicula</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('category_movie')}}">
          @csrf
          <div>
            <input type="hidden" name="id" value="{{$count+1}}">
            <label>Pelicula</label>
            <select name="movie_id" class="form-control">
              @foreach($movies as $movie)
                <option value="{{$movie->id}}">{{$movie->name}}</option>
              @endforeach
            </select>
            <label>Categoria</label>
            <select name="category_id" class="form-control">
              @foreach($categories as $categories)
                <option value="{{$categories->id}}">{{$categories->name}}</option>
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