@extends('vistas.cliente.inicioUsuario')

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
			</tr>

		@endforeach
		
	</tbody>
</table>
<br>


{!! $solicitud_renta -> render() !!}

@endsection