@extends('index')

@section('content')
            <div class="col-md-6 mx-auto p-4">
                <h5 class="pt-4"> Crear/Editar </h5>
                    <form action="{{route('store')}}" method="POST">
                    @csrf

                        <div class="form-group">
                            <input type="text" name="Nombres" class="form-control" placeholder="Nombres" autofocus required>
                        </div>
                        <div class="form-row form-group">
                            <div class='col-md-6'>
                                <input type="text" name="ApellidoPaterno" class="form-control" placeholder="Apellido Paterno" required>
                            </div>              
                            <div class='col-md-6'>
                                <input type="text" name="ApellidoMaterno" class="form-control" placeholder="Apellido Materno" required>
                            </div>    
                        </div>
                        <div class="form-row form-group">
                            <div class='col-md-6'>
                                <input type="text" name="Rut" class="form-control" placeholder="Rut" required>
                            </div>              
                            <div class='col-md-6'>
                                <input type="date" name="FechadeNacimiento" class="form-control" placeholder="Fecha de nacimiento" required>
                            </div>    
                        </div>                    
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>                    
                        <div class="form-group">
                            <input type="password" name="Contrasena" class="form-control" placeholder="Contrasena" required>
                        </div>
                            <input hidden type="file" id="subirFoto" accept="image/*" name="Foto">
                            <button class="btn btn-grey btn-block" type="button" onclick="subirFoto.click()">
                                Subir foto de perfil
                            </button>
                            <button class="btn btn-primary btn-block" type="submit">
                                Guardar
                            </button>
                    </form>
            </div>
@endsection