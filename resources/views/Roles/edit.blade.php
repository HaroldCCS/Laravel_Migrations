@extends('home')
@section('titulo','Roles')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<form action="{{url('roles/'.$roles->id)}}" method="post" novalidate>
				@csrf
				@method('PATCH')
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" value="{{$roles->name}}" class="form-control" autocomplete="off" required>
					</div>
					<div>
						<label>Status</label>
						<input type="text" name="status_id" value="{{$roles->status_id}}" class="form-control" autocomplete="off" required>
					</div><br>

					<div class="form-group">
						<a href="{{url('roles')}}" class="btn btn-danger">Volver</a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
					
				</form>
			</article>
		</div>
	</section>
@stop