@extends('vistas.admin.inicioAdmin')

@section('titulo', 'Crear usuario')

@section('content')
	
	
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

	@if(count($errors) > 0)
		<div class="alert alert-danger">
	        <ul>
				@foreach($errors->all() as $error)  

					<li>{{ $error }}</li>
					
          		@endforeach

			</ul>
   		 </div>
	@endif

<br>
                <h2>
                    Crear Usuario
                </h2>
<br>
					{!! Form::text ('nombre',null,['placeholder' => 'Nombre del usuario' , 'required']) !!}
					{!! Form::text ('apellido',null,['placeholder' => 'Apellido del usuario' , 'required']) !!}
					{!! Form::text ('telefono',null,['placeholder' => 'Número de Teléfono' , 'required']) !!}
					{!! Form::text ('numero_licencia',null,['placeholder' => 'Número de la licencia' , 'required']) !!}
					{!! Form::text ('direccion',null,['placeholder' => 'Dirección' , 'required']) !!}
					{!! Form::text ('usuario',null,['placeholder' => 'Username' , 'required']) !!}
					{!! Form::password ('contraseña',['placeholder' => 'Password' , 'required']) !!}
					{!! Form::password ('contraseñaRepetir',['placeholder' => 'Repite tu Password' , 'required']) !!}
					{!! Form::select('tipo',['' => 'Seleccione un tipo' , 'cliente' => 'Cliente' , 'admin' => 'Administrador'] , null) !!}
              		{!! Form::submit ('Registrar',['class' => 'botonCrear']) !!}
                  

 
	{!! Form::close() !!}

@endsection