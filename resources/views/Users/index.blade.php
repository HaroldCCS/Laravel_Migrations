@extends('home')
@section('titulo', 'Users')
@section('content')
	<section class="container">
		<center><h1></h1></center>
		<div class="row">
			<article class="col-md-12">

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Registrar
				</button>

			</article>

			<article class="col-md-12">
				<table class="table table-condensed table-striped table-bordered">
					<thead align="center">
						<tr>
							<th>Nombre</th>
							<th>email</th>
							<th>status_id</th>
							<th>role_id</th>
							<th colspan="">Acción</th>
						</tr>
					</thead>
					<tbody align="center">
						@foreach($users as $user)
							<tr>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->status_id}}</td>
								<td>{{$user->role_id}}</td>
								<td style="display: inline-flex;border: none;">

									<a href="{{url('users/'.$user->id.'/edit')}}" class="btn btn-warning">Editar</a>
									<form action="{{url('users/'.$user->id)}}" method="post">
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

	@include('Users.addUsers')
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
@stop