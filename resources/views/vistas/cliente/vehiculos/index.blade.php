@extends('vistas.admin.inicioUsuario')

@section('titulo', 'Bienvenido')

@section('content')
	
<br>
<h2>
	Lista de vehículos
</h2>
<br>

<br>

	<tbody>
		
		@foreach( $vehiculos as $vehiculo )

	        <div class="fila">
				<a href="{{ route('cliente.vehiculos.extra', $vehiculo->id) }}"><img>
                 <div class="descripcion">
                   {!! Form::label ('Modelo de carro: '. $vehiculo->modelo) !!}
                   {!! Form::label ('Marca de carro: '. $vehiculo->marca) !!}
                </div>  
                </a> 
            </div>
		@endforeach
		
	</tbody>

<br>
{!! $vehiculos -> render() !!}
<br>
<br>

<a href="{{ route('admin.vehiculos.create') }}" class="button" style="text-decoration:none;">Registrar Nuevo Vehículo</a>


@endsection
