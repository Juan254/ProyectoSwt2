@extends('vistas.admin.inicioUsuario')

@section('titulo', 'vehiculo con placa:'. $vehiculo->placa)

@section('content')
	
<br>
<h2>
	{!! Form::label ('vehiculo con placa:'. $vehiculo->placa) !!}
</h2>
<br>

<br>

	<tbody>
		
            <h2>
                Nombre del carro
            </h2>
            <div class="infoCarro">
                <img class="foto" >

                <div class="descripcion">
                    Información: 
                    <br />
                    {!! Form::label ('Marca del vehiculo: '. $vehiculo->marca) !!}
                    <br />
                    {!! Form::label ('Capacidad del vehiculo: '. $vehiculo->capacidad) !!}
                    <br />
                    {!! Form::label ('Precio por hora: '. $vehiculo->precio_hora) !!}
                    <br />
                     {!! Form::label ('Color del vehiculo: '. $vehiculo->color) !!}
                    <br />
                     {!! Form::label ('Modelo del vehiculo: '. $vehiculo->modelo) !!}
                    <br />
                     {!! Form::label ('Placa del vehiculo: '. $vehiculo->placa) !!}
                    <br />
                    {!! Form::label ('Kilometraje del vehiculo: '. $vehiculo->kilometraje) !!}
                    <br />
                    Disponible:
                    @if( $vehiculo->disponibilidad == 1)
						{!! Form::label ('No disponible') !!}
					@else
						{!! Form::label ('disponible') !!}
					@endif
                    
                </div>

            </div>
            <button type="submit" class="botonRentar">Rentar</button>
		
	</tbody>

<br>
{!! $vehiculos -> render() !!}
<br>
<br>

@endsection