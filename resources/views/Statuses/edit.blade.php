@extends('home')
@section('titulo','Status')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<form action="{{url('statuses/'.$status->id)}}" method="post" novalidate>
				@csrf
				@method('PATCH')
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" value="{{$status->name}}" class="form-control" autocomplete="off" required>
					</div>
					<div>
						<label>Descripción</label>
						<input type="text" name="type_status_id" value="{{$status->type_status_id}}" class="form-control" autocomplete="off" required>
					</div><br>

					<div class="form-group">
						<a href="{{url('statuses')}}" class="btn btn-danger">Volver</a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
					
				</form>
			</article>
		</div>
	</section>
@stop