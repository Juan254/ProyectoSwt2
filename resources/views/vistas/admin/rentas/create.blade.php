@extends('vistas.admin.inicioAdmin')

@section('titulo', 'Rentar Vehiculo ' . $vehiculo->placa)

@section('content')
	
	
	{!! Form::open(['route' => ['vistas.admin.rentas.storeRenta' , $vehiculo] , 'method' => 'POST']) !!}


<br>
                <h2>
                    {!! Form::label ('Rentar Vehiculo '. $vehiculo->placa) !!}
                </h2>
<br>
			
					{!! Form::date ('fecha_renta', null,['placeholder' => 'DD:MM:AA' , 'required']) !!}
					{!! Form::time ('hora_renta', null,['placeholder' => 'HH:MM:SS' , 'required']) !!}
					{!! Form::text ('kilometraje', $vehiculo->kilometraje,['placeholder' => 'Kilometraje actual del vehiculo' , 'required']) !!}
					{!! Form::text ('numero_licencia', null,['placeholder' => 'Numero de licencia del conductor' , 'required']) !!}
					<br>	
              		{!! Form::submit ('Crear Solicitud de renta',['class' => 'botonCrear']) !!}
                  

 
	{!! Form::close() !!}

@endsection