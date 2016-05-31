@extends('vistas.cliente.inicioUsuario')

@section('titulo', 'Bienvenido')

@section('content')
	
<br>
<h2>
	Lista de vehículos
</h2>
<br>

<br>
<table>
	<thread>
		<th>ID</th>
		<th>Marca</th>
		<th>Modelo</th>
        <th>Placa</th>
        <th>Precio</th>
        <th>Disponibilidad</th>
        <th>Ver más</th>
	</thread>
	<tbody>
		
		@foreach( $vehiculos as $vehiculo )
			<tr>
				<td> {{ $vehiculo->id }} </td>
				<td>{{ $vehiculo->marca }}</td>	
				<td>{{ $vehiculo->modelo }}</td>
				<td>{{ $vehiculo->placa }}</td>
				<td>{{ $vehiculo->precio_hora }}</td>
				<td>
					@if($vehiculo->disponibilidad == 0)
						<span class="admin">No disponible</span>
					@else
						<span class="cliente">Disponible</span>
					@endif

				</td>
				
				<td><a href="{{ route('cliente.vehiculos.extra', $vehiculo->id) }}"><img src="{{ asset ('recursos/imagenes/mmas.png')}}"></a>
				</td>

		@endforeach
		
	</tbody>
</table>
<br>
{!! $vehiculos -> render() !!}
<br>
<br>

@endsection
