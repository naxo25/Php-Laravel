@extends('index')

@section('content')

<div class="col-md-6 mx-auto p-4">
    <h5 class="pt-4"> Crear/Editar </h5>
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="form-group">
                <input type="text" name="Nombres" class="form-control 
                {{$errors->has('Nombres') ? 'is-invalid':''}} " placeholder="Nombres" 
                value="{{isset($personas->Nombres)?$personas->Nombres:old('Nombres')}}">
                {!! $errors->first('Nombres',' <div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-row form-group">

                <div class='col-md-6'>
                    <input type="text" name="ApellidoPaterno" class="form-control {{$errors->has('ApellidoPaterno') ? 'is-invalid':''}}" placeholder="ApellidoPaterno" value="{{isset($personas->ApellidoPaterno)?$personas->ApellidoPaterno:old('ApellidoPaterno')}}">
                        {!! $errors->first('ApellidoPaterno',' 
                            <div class="invalid-feedback">:message</div>')
                        !!}
                </div>         

                <div class='col-md-6'>
                    <input type="text" name="ApellidoMaterno" class="form-control {{$errors->has('ApellidoMaterno') ? 'is-invalid':''}}" placeholder="ApellidoMaterno" value="{{isset($personas->ApellidoMaterno)?$personas->ApellidoMaterno:old('ApellidoMaterno')}}">
                        {!! $errors->first('ApellidoMaterno','
                            <div class="invalid-feedback">:message</div>') 
                        !!}
                </div>    

            </div>

            <div class="form-row form-group">

                <div class='col-md-6'>
                    <input type="text" name="Rut" class="form-control {{$errors->has('Rut') ? 'is-invalid':''}}" placeholder="Rut" value="{{isset($personas->Rut)?$personas->Rut:old('Rut')}}">
                        {!! $errors->first('Rut','
                            <div class="invalid-feedback">:message</div>') 
                        !!}
                </div>   

                <div class='col-md-6'>
                    <input type="date" name="FechadeNacimiento" class="form-control {{$errors->has('FechadeNacimiento') ? 'is-invalid':''}}" placeholder="FechadeNacimiento" value="{{isset($personas->FechadeNacimiento)?$personas->FechadeNacimiento:old('FechadeNacimiento')}}">
                        {!! $errors->first('FechadeNacimiento','
                            <div class="invalid-feedback">:message</div>') 
                        !!}
                </div>   

            </div>   

            <div class="form-group">
                <input type="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid':''}} " placeholder="email" value=" {{isset($personas->email)?$personas->email:old('email')}}">
                    {!! $errors->first('email','
                        <div class="invalid-feedback">:message</div>') !!}
            </div>              

            <div class="form-group">
                <input type="text" name="Contrasena" class="form-control 
                {{$errors->has('Contrasena') ? 'is-invalid':''}} " placeholder="Contrasena" 
                value="{{isset($personas->Contrasena)?$personas->Contrasena:old('Contrasena')}}">
                    {!! $errors->first('Contrasena','
                        <div class="invalid-feedback">:message</div>') 
                    !!}
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