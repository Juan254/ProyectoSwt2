@extends('vistas.admin.inicioAdmin')

@section('titulo', 'Lista de usuarios')

@section('content')
	
<br>
<h2>
	Lista de usuarios
</h2>
<br>

<br>
<table>
	<thread>
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Tipo</th>
		<th>Bono</th>
		<th>Eliminar</th>
	</thread>
	<tbody>
		
		@foreach( $users as $user )
			<tr>
				<td>{{ $user->id }}</td>	
				<td>{{ $user->nombre }}</td>
				<td>{{ $user->apellido }}</td>
				<td>
					@if( $user->tipo == "admin")
						<span class="admin">{{ $user->tipo }}</span>
					@else
						<span class="cliente">{{ $user->tipo }}</span>
					@endif

					
				</td>
				<td>
					@if( $user->bono == 1)
						Si
					@else
						No
					@endif

				</td>
                <td><a onclick="return confirm('¿Desea eliminar el usuario?')" href="{{ route('vistas.admin.users.destroy', $user->id) }}"  >
                <img src="{{ asset ('recursos/imagenes/eliminar.png')}}"></a></td>
			</tr>

		@endforeach
		
	</tbody>
</table>
<br>
{!! $users -> render() !!}
<br>
<br>

<a href="{{ route('admin.users.create') }}" class="button" style="text-decoration:none;">Registrar Nuevo usuario</a>


@endsection
