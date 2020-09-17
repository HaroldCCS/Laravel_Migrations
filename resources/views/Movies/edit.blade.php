@extends('home')
@section('titulo','Movies')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<center><h1>Movies</h1></center>
				<form action="{{url('movies/'.$movies->id)}}" method="post" novalidate>
				@csrf
				@method('PATCH')
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="name" value="{{$movies->name}}" class="form-control" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Descripción:</label>
						<textarea class="form-control" rows="3" name="description" autocomplete="off" required>{{$movies->description}}</textarea>
					</div>
					<div class="form-group">
						<label>Usuario</label>
						<select name="user_id" class="form-control">
						  @foreach($datos as $dato)
							<optgroup label="{{$dato->user}}">
						  @endforeach
			              @foreach($users as $user)
			                <option value="{{$user->id}}">{{$user->name}}</option>
			              @endforeach
			            </select>
					</div>
					<div class="form-group">
						<label>Estatus</label>
						<select name="status_id" class="form-control">
						  @foreach($datos as $dato)
							<optgroup label="{{$dato->status}}">
						  @endforeach
			              @foreach($statuses as $status)
			                <option value="{{$status->id}}">{{$status->name}}</option>
			              @endforeach
			            </select>
					</div><br>

					<div class="form-group">
						<a href="{{url('movies')}}" class="btn btn-danger">Volver</a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
					
				</form>
			</article>
		</div>
	</section>
@stop