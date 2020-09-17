@extends('home')
@section('titulo','Category Movie')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<center><h1>Category Movie</h1></center>
				<form action="{{url('category_movie/'.$detalle->id)}}" method="post" novalidate>
				@csrf
				@method('PATCH')

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
						<label>Categoria</label>
						<select name="category_id" class="form-control">
						  @foreach($datos as $dato)
							<optgroup label="{{$dato->category}}">
						  @endforeach
			              @foreach($categories as $category)
			                <option value="{{$category->id}}">{{$category->name}}</option>
			              @endforeach
			            </select>
					</div><br>

					<div class="form-group">
						<a href="{{url('category_movie')}}" class="btn btn-danger">Volver</a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
					
				</form>
			</article>
		</div>
	</section>
@stop