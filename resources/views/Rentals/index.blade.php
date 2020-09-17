@extends('home')
@section('titulo', 'Rentals')
@section('content')
	<section class="container">
		<center><h1></h1></center>
		<div class="row">
			<article class="col-md-12">

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rentals">
				  Registrar
				</button>

			</article>

			<article class="col-md-12">
				<table class="table table-condensed table-striped table-bordered">
					<thead align="center">
						<tr>
							<th>Fecha Inicio</th>
							<th>Fecha Final</th>
							<th>Total</th>
							<th>Usuario</th>
							<th>Estatus</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody align="center">
						@foreach($datos as $dato)
							<tr>
								<td>{{$dato->start_date}}</td>
								<td>{{$dato->end_date}}</td>
								<td>${{$dato->total}}</td>
								<td>{{$dato->user}}</td>
								<td>{{$dato->status}}</td>
								<td style="display: inline-flex;border: none;">

									<a href="{{url('rentals/'.$dato->id.'/edit')}}" class="btn btn-warning">Editar</a>
									<form action="{{url('rentals/'.$dato->id)}}" method="post">
										@csrf
										@method('DELETE')
										<button type="submit" onClick="return confirm('¿Desea realizar esta operación?')" class="btn btn-danger">Eliminar</button>
									</form>		
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</article>
		</div>
		
	</section>

	@include('Rentals.addRentals')
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
@stop