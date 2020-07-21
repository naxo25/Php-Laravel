@extends('index')

@section('content')
            <div class="col-md-6 mx-auto p-4">
                <h5 class="pt-4"> Crear/Editar </h5>
                    <form action="{{route('update', $personaActualizar->Id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                        <div class="form-group">
                            <input type="text" name="Nombres" class="form-control" placeholder="Nombres" autofocus required value="{{$personaActualizar->Nombres}}">
                        </div>
                        <div class="form-row form-group">
                            <div class='col-md-6'>
                                <input type="text" name="ApellidoPaterno" class="form-control" placeholder="Apellido Paterno" required value="{{$personaActualizar->ApellidoPaterno}}">
                            </div>              
                            <div class='col-md-6'>
                                <input type="text" name="ApellidoMaterno" class="form-control" placeholder="Apellido Materno" required  value="{{$personaActualizar->ApellidoMaterno}}">
                            </div>    
                        </div>
                        <div class="form-row form-group">
                            <div class='col-md-6'>
                                <input type="text" name="Rut" class="form-control" placeholder="Rut" required value="{{$personaActualizar->Rut}}">
                            </div>              
                            <div class='col-md-6'>
                                <input type="date" name="FechadeNacimiento" class="form-control" placeholder="Fecha de nacimiento"  value="{{$personaActualizar->FechadeNacimiento}}" required>
                            </div>    
                        </div>                    
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required value="{{$personaActualizar->email}}">
                        </div>                    
                        <div class="form-group">
                            <input type="password" name="Contrasena" class="form-control" placeholder="Contrasena" required value="{{$personaActualizar->Contrasena}}">
                        </div>
                            <input hidden type="file" id="subirFoto" accept="image/*">
                            <button class="btn btn-grey btn-block" type="button" onclick="subirFoto.click()">
                                Subir foto de perfil
                            </button>
                            <button class="btn btn-primary btn-block" type="submit">
                                Guardar
                            </button>
                    </form>
                @if (session('update'))
                    <div class="alert alert-success mt-3">
                        {{session('update')}}
                    </div>
                @endif
            </div>
@endsection