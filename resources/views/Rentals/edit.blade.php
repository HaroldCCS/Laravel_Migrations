@extends('home')
@section('titulo','Rentals')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<center><h1>Rentals</h1></center>
				<form action="{{url('rentals/'.$rentals->id)}}" method="post" novalidate>
				@csrf
				@method('PATCH')
					<div class="form-group">
						<label>Fecha Inicio</label>
						<input type="date" name="start_date" value="{{$rentals->start_date}}" class="form-control" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Fecha Final</label>
						<input type="date" name="end_date" value="{{$rentals->end_date}}" class="form-control" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Total</label>
						<input type="number" min="0" name="total" value="{{$rentals->total}}" class="form-control" autocomplete="off" required>
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
						<a href="{{url('rentals')}}" class="btn btn-danger">Volver</a>
						<button type="submit" class="btn btn-success">Enviar</button>
					</div>
					
				</form>
			</article>
		</div>
	</section>
@stop