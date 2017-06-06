@extends('welcome')
@section('contenido')

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Region</th>
			<th>Comuna</th>
		</tr>
	</thead>
	<tbody>
		@foreach($sucursales as $sucursal)
		<tr>
			<td>{{$sucursal->id}}</td>
			<td>{{$sucursal->region}}</td>
			<td>{{$sucursal->comuna}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection