@extends('home')
@section('titulo','Movie Rentals')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<center><h1>Movies</h1></center>
				<form action="{{url('movie_rental/'.$detalle->id)}}" method="post" novalidate>
				@csrf
				@method('PATCH')
					<div class="form-group">
						<label>Precio</label>
						<input type="text" name="price" pattern="[0-9-.]{1,7}" value="{{$detalle->price}}" class="form-control" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Observaciones</label>
						<textarea class="form-control" rows="3" name="observations" autocomplete="off" required>{{$detalle->observations}}</textarea>
					</div>
					<div class="form-group">
						<label>Pelicula</label>
						<select name="movie_id" class="form-control">
						  @foreach($datos as $dato)
							<optgroup label="{{$dato->movie}}">
						  @endforeach
			              @foreach($movies as $movie)
			                <option value="{{$movie->id}}">{{$movie->name}}</option>
			              @endforeach
			            </select>
					</div>
					<div class="form-group">
						<label>Renta a Usuario</label>
						<select name="rental_id" class="form-control">
						  @foreach($datos as $dato)
							<optgroup label="{{$dato->user}}">
						  @endforeach
						  @foreach($rentals as $rentals)
			                <option value="{{$rentals->id}}">{{$rentals->name}}</option>
			              @endforeach
			            </select>
					</div><br>

					<div class="form-group">
						<a href="{{url('movie_rental')}}" class="btn btn-danger">Volver</a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
					
				</form>
			</article>
		</div>
	</section>
@stop