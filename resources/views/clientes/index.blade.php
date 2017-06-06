@extends('welcome')
@section('contenido')

<form action="{{route('createCliente')}}" method="post">

<label>Nombre del cliente: </label>
<input type="text" name="nombre">

<label>Rut cliente:</label>
<input type="text" name="rut">	

<label>Email cliente:</label>
<input type="text" name="email">	

<label>Fecha de nacimiento</label>
<input type="date" name="fecha_de_nacimiento">


</form>

@endsection