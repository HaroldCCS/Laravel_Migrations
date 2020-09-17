@extends('home')
@section('titulo','Type Status')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<form action="{{url('typestatuses/'.$typestatuses->id)}}" method="post" novalidate>
				@csrf
				@method('PATCH')
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" value="{{$typestatuses->name}}" class="form-control" autocomplete="off" required>
					</div><br>
					<div class="form-group">
						<a href="{{url('typestatuses')}}" class="btn btn-danger">Volver</a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
					
				</form>
			</article>
		</div>
	</section>
@stop