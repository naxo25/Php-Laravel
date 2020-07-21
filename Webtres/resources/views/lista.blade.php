@extends('index')

@section('content')
	<div class="row mt-4">
		<div class="col-md-12 mt-4">
			<div class="navbar">
			<h5>Usuarios</h5>
			<a href="{{route('save')}}"> <button class="btn btn-primary">Agregar</button></a>
			</div>			
			<table class="table mt-2 border-0">
				<tr>
					<th>NOMBRES</th>
					<th>APELLIDO PATERNO</th>
					<th>APELLIDO MATERNO</th>
					<th>RUT</th>
					<th>FECHA NACIMIENTO</th>
					<th>EMAIL</th>
				</tr>
				@foreach ($personas as $item)				
				<tr>
					<td>{{$item->Nombres}}</td>
					<td>{{$item->ApellidoPaterno}}</td>
					<td>{{$item->ApellidoMaterno}}</td>
					<td>{{$item->Rut}}</td>
					<td>{{$item->FechadeNacimiento}}</td>
					<td>{{$item->email}}</td>

					<td><a href="{{route('editar', $item->Id)}}" style="color: blue">Editar</a></td>
					<td><a href="{{route('editar', $item->Id)}}" style="color: red">Eliminar</a></td>
					<td hidden>
					<form action="{{route('eliminar', $item->Id) }}" method="POST">
						@csrf
						@method('DELETE')
      					<button type="submit">Eliminar</button>
					</form>
					</td>
				</tr>
				@endforeach
			</table>
			{{$personas->links()}}

                @if (session('eliminar'))
                    <div class="alert alert-success mt-3">
                        {{session('eliminar')}}
                    </div>
                @endif
		</div>
	</div>
@endsection