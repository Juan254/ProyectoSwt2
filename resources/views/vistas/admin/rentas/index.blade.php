@extends('vistas.admin.inicioAdmin')

@section('titulo', 'Lista de rentas')

@section('content')

<br>
<h2>
	Lista de Rentas
</h2>
<br>

<br>
<table>
	<thread>
		<th>Fecha</th>
		<th>Hora</th>
		<th>Licencia</th>
		<th>Estado</th>
		<th>Editar</th>
        <th>Eliminar</th>
        <th>Pagar/Facturar</th>
	</thread>
	<tbody>
		
		@foreach( $solicitud_renta as $renta )
			<tr>
				<td>{{ $renta->fecha_renta }}</td>
				<td>{{ $renta->hora_renta }}</td>
				<td>{{ $renta->licencia_user }}</td>

				<td>
					@if($renta->estado == 0)
						<span class="admin">No Pagado</span>
					@else
						<span class="cliente">Pagado</span>
					@endif
				</td>
				
				<td>
					@if($renta->estado == 0)
						<a href="{{ route('admin.rentas.edit', $renta->id) }}"><img src="{{ asset ('recursos/imagenes/editar.png')}}"></a>
					@else
						<img src="{{ asset ('recursos/imagenes/lock.png')}}">
					@endif
				</td>
				<td><a onclick="return confirm('¿Desea eliminar la solicitud de renta?')" href="{{ route('vistas.admin.rentas.destroy', $renta->id) }}"><img src="{{ asset ('recursos/imagenes/eliminar.png')}}"></a></td>
				<td>
					@if($renta->estado == 0)
						<a  href="{{ route('vistas.admin.facturas.devolucion', $renta->id) }}"><img src="{{ asset ('recursos/imagenes/pago.png')}}"></a>
					@else
						<a  href="{{ route('admin.pdf.factura', $renta->id) }}"> <img src="{{ asset ('recursos/imagenes/facturar.png')}}"> </a>
					@endif
				</td>
			</tr>

		@endforeach
		
	</tbody>
</table>
<br>


{!! $solicitud_renta -> render() !!}

@endsection