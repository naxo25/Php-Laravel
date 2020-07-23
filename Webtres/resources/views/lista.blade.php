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
					<th></th>
					<th>NOMBRES</th>
					<th>APELLIDO PATERNO</th>
					<th>APELLIDO MATERNO</th>
					<th>RUT</th>
					<th>FECHA NACIMIENTO</th>
					<th>EMAIL</th>
				</tr>
				@foreach ($personas as $item)				
				<tr>
					<td><img src="{{asset('storage').'/'.$item->Foto}}" width="44px" height="44px" style="border-radius:50%" /></td>
					<td>{{$item->Nombres}}</td>
					<td>{{$item->ApellidoPaterno}}</td>
					<td>{{$item->ApellidoMaterno}}</td>
					<td>{{$item->Rut}}</td>
					<td>{{$item->FechadeNacimiento}}</td>
					<td>{{$item->email}}</td>

					<td><a href="{{route('editar', $item->Id)}}"><button class="btn btn"  style="color: blue; padding: 0">Editar</button></a></td>
					<td>
					<form action="{{route('eliminar', $item->Id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('DELETE')
      					<button type="submit" class="btn btn" id="eliminar_btn" style="color: red; padding: 0px">Eliminar</button>
					</form>
					</td>
				</tr>
				@endforeach
			</table>
			@if (session('etiqueta'))
                <div class="alert alert-success mt-3">
                    {{session('etiqueta')}}
            	</div>
            @endif
			{{$personas->links()}}

		</div>
	</div>
@endsection