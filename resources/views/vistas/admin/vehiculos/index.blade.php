@extends('vistas.admin.inicioAdmin')

@section('titulo', 'Lista de vehículos')

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
        <th>Editar</th>
        <th>Eliminar</th>
        <th>Rentar</th>
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
				
				<td><a href="{{ route('admin.vehiculos.edit', $vehiculo->id) }}"><img src="{{ asset ('recursos/imagenes/editar.png')}}"></a></td>
				<td><a onclick="return confirm('¿Desea eliminar el vehiculo?')" href="{{ route('vistas.admin.vehiculos.destroy', $vehiculo->id) }}"><img src="{{ asset ('recursos/imagenes/eliminar.png')}}"></a></td>
				<td>
					@if( $vehiculo->disponibilidad == 1 )
						<a  href="{{ route('vistas.admin.rentas.createRenta', $vehiculo->id) }}"><img src="{{ asset ('recursos/imagenes/rentar.png')}}"></a>
					@else
						<img src="{{ asset ('recursos/imagenes/lock.png')}}">
					@endif

				</td>
			</tr>

		@endforeach
		
	</tbody>
</table>
<br>
{!! $vehiculos -> render() !!}
<br>
<br>

<a href="{{ route('admin.vehiculos.create') }}" class="button" style="text-decoration:none;">Registrar Nuevo Vehículo</a>


@endsection
