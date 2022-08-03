
<h1>{{ $modo }} empleado</h1>
@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
<ul>

@foreach( $errors->all() as $error)
    <li>{{ $error }}</li>

    @endforeach

</ul>
</div>

@endif

<div class="form-group">
<label for="Nombre">Nombre</label>    
<input class="form-control" type="text"  name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}">
</div>

<div class="form-group">
<label for="ApellidoPaterno">Apellido Paterno</label>
<input class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}">
</div>

<div class="form-group">
<label for="ApellidoMaterno">Apellido Materno</label>
<input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
</div>

<div class="form-group">
<label for="Correo">Correo</label>
<input class="form-control" type="text" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
</div>

<div class="form-group">
<label for="Foto"> </label>
@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="100" > 
@endif
<input class="form-control"  type="file" name="Foto" id="Foto" value="{{isset($empleado->Foto)?$empleado->Foto:old('Foto')}}">
</div>

<div class="form-group">

<input class="btn btn-success" type="submit" value="{{ $modo }} datos" id="Enviar">
<a class="btn btn-primary" href="{{url('empleado/')}}">Regresar</a>
</div>


