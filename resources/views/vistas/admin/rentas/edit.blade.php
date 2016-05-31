@extends('vistas.admin.inicioAdmin')

@section('titulo', 'Editar renta ')

@section('content')
	
	
	{!! Form::open(['route' => ['admin.rentas.update' , $renta] , 'method' => 'PUT']) !!}


<br>
                <h2>
                    {!! Form::label ('Modificar renta con la licencia '. $renta->licencia_user) !!}
                </h2>
<br>
			
					{!! Form::date ('fecha_renta', $renta->fecha_renta,['placeholder' => 'DD:MM:AA' , 'required']) !!}
					{!! Form::time ('hora_renta', $renta->hora_renta,['placeholder' => 'HH:MM:SS' , 'required']) !!}
					<br>	
              		{!! Form::submit ('Editar Solicitud de Renta',['class' => 'botonCrear']) !!}
                  

 
	{!! Form::close() !!}

@endsection