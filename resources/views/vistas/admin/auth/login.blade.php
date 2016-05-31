@extends('vistas.home')

@section('titulo', 'login')


@section('content')

{!! Form::open(['route' => ['vistas.admin.auth.login'] , 'method' => 'POST']) !!}


<br>
                <h2>
                    {!! Form::label ('Iniciar Sesión') !!}
                </h2>
<br>
			
					{!! Form::text ('usuario', null,['placeholder' => 'Ingresa tu nombre de usuario' , 'required']) !!}
					{!! Form::password ('contraseña',['placeholder' => '*************' , 'maxlength' => 255, 'required']) !!}
					<br>	
              		{!! Form::submit ('Iniciar',['class' => 'botonIniciar']) !!}
                   
{!! Form::close() !!}

@endsection