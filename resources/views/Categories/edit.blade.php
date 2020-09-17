@extends('home')
@section('titulo','Categories')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<center><h1>Categories</h1></center>
				<form action="{{url('categories/'.$categories->id)}}" method="post" novalidate>
				@csrf
				@method('PATCH')
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" name="name" value="{{$categories->name}}" class="form-control" autocomplete="off" required>
					</div>
					
					<div class="form-group">
						<label>Estado</label>
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
						<a href="{{url('categories')}}" class="btn btn-danger">Volver</a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
					
				</form>
			</article>
		</div>
	</section>
@stop