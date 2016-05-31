@extends('vistas.cliente.inicioUsuario')

@section('titulo', 'vehiculo con placa:'. $vehiculo->placa)

@section('content')
	
<br>
<h2>
	{!! Form::label ('Información del vehiculo con placa: '. $vehiculo->placa) !!}
</h2>
<br>

<br>
    <table>
	   <tbody>
        
                    <tr>
                        <img src='{{ asset ("images/vehiculos/$vehiculo->id.png")}}' >
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Marca del vehiculo:') !!}</strong></td>
                        <td><strong>{!! Form::label ($vehiculo->marca) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Capacidad del vehiculo:') !!}</strong></td>
                        <td><strong>{!! Form::label ( $vehiculo->capacidad) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Precio por hora del vehiculo:') !!}</strong></td>
                        <td><strong>{!! Form::label ($vehiculo->precio_hora) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Color del vehiculo:') !!}</strong></td>
                        <td><strong>{!! Form::label ($vehiculo->color) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Modelo del vehiculo:') !!}</strong></td>
                        <td><strong>{!! Form::label ($vehiculo->modelo) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Placa del vehiculo:') !!}</strong></td>
                        <td><strong>{!! Form::label ($vehiculo->placa) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Kilometraje del vehiculo:') !!}</strong></td>
                        <td><strong>{!! Form::label ($vehiculo->kilometraje) !!}</strong></td>
                    </tr>
                    <tr>
                        <td> <strong>{!! Form::label ('Disponibilidad:') !!}</strong></td>
                        <td>
                            @if( $vehiculo->disponibilidad == 0)
                                <span class="admin">No disponible</span>
                            @else
                                <span class="cliente">Disponible</span>
                            @endif
                        </td>
                    </tr> 
	   </tbody>
    </table>
<br>

<br>
<br>

@endsection