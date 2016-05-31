@extends('vistas.admin.inicioAdmin')

@section('titulo', 'Editar Vehiculo ' . $vehiculo->placa)

@section('content')
	
	
	{!! Form::open(['route' => ['admin.vehiculos.update' , $vehiculo] , 'method' => 'PUT']) !!}


<br>
                <h2>
                    {!! Form::label ('Editar vehiculo '. $vehiculo->placa) !!}
                </h2>
<br>
			
					{!! Form::text ('color', $vehiculo->color ,['placeholder' => 'Color del vehículo' , 'required']) !!}
					{!! Form::text ('kilometraje', $vehiculo->kilometraje,['placeholder' => 'Kilometraje' , 'required']) !!}
					{!! Form::text ('precio_hora', $vehiculo->precio_hora,['placeholder' => 'Precio por hora' , 'required']) !!}
					{!! Form::label ('Foto:') !!}

					<br>	
					{!! Form::file ('Archivo') !!}
              		{!! Form::submit ('Editar Vehiculo',['class' => 'botonCrear']) !!}
                  

 
	{!! Form::close() !!}

@endsection

