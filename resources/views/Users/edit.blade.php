@extends('home')
@section('titulo','Users')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<form action="{{url('users/'.$users->id)}}" method="post" novalidate>
				@csrf
				@method('PATCH')
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" value="{{$users->name}}" class="form-control" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>email</label>
						<input type="email" name="email" value="{{$users->email}}" class="form-control" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" value="{{$users->password}}" class="form-control" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>status_id</label>
						<input type="number" min="1" name="status_id" value="{{$users->status_id}}" class="form-control" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>role_id</label>
						<input type="number" min="1" name="role_id" value="{{$users->role_id}}" class="form-control" autocomplete="off" required>
					</div><br>

					<div class="form-group">
						<a href="{{url('users')}}" class="btn btn-danger">Volver</a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
					
				</form>
			</article>
		</div>
	</section>
@stop