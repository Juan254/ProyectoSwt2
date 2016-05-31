@extends('vistas.admin.inicioAdmin')

@section('titulo', 'Realizar facturación de la solicitud de renta para la licencia '.$solicitud_renta->licencia_user)

@section('content')
	
	
	{!! Form::open(['route' => ['vistas.admin.facturas.storeFactura' , $solicitud_renta] , 'method' => 'POST']) !!}


<br>
                <h2>
                    {!! Form::label ('Realizar facturación de la solicitud de renta para la licencia '.$solicitud_renta->licencia_user) !!}
                </h2>
<br>
			
					{!! Form::date ('fecha_factura', null,['placeholder' => 'DD:MM:AA' , 'required']) !!}
					{!! Form::time ('hora_factura', null,['placeholder' => 'HH:MM:SS' , 'required']) !!}
					{!! Form::text ('kilometraje', null,['placeholder' => 'Kilometraje actual del vehiculo' , 'required']) !!}
					{!! Form::textarea ('descripcion', null,['placeholder' => 'Descripcion del vehiculo' , 'maxlength' => 255, 'required']) !!}
					<br>	
              		{!! Form::submit ('Crear factura',['class' => 'botonCrear', 'onclick' => "return confirm('¿Desea realizar el pago?')"]) !!}
                  

 
	{!! Form::close() !!}

@endsection