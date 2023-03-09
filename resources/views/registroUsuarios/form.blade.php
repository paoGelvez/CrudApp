<h1>{{$modo}} Datos del usuario</h1>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{isset($datosUsuarios->nombre)?$datosUsuarios->nombre:''}}" id="nombre">
<br>

<label for="apellido">apellido</label>
<input type="text" name="apellido" value="{{isset($datosUsuarios->apellido)?$datosUsuarios->apellido:''}}"id="apellido">
<br>


<label for="celular">celular</label>
<input type="text" name = "celular" value="{{isset($datosUsuarios->celular)?$datosUsuarios->celular:'' }}"id="celular">
<br>

<label for="cedula">cedula</label>
<input type="text" name = "cedula" value="{{isset($datosUsuarios->cedula)?$datosUsuarios->cedula:''}}"id="cedula">
<br>

<label for="email">email</label>
<input type="text" name = "email" value="{{isset($datosUsuarios->email)?$datosUsuarios->email:''}}" id="email">
<br>

{{-- <label for="id_categorias">categoria</label>
<input type="text" name = "id_categorias" value="{{isset($datosUsuarios->id_categorias)?$datosUsuarios->id_categorias:''}}"id="id_categorias">
<br> --}}

<input type="submit" value= "{{$modo}} datos" id="Enviar">

<a href="{{url('/RegistroUsuarios')}}"> Regresar</a>