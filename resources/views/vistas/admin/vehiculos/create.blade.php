@extends('vistas.admin.inicioAdmin')

@section('titulo', 'Crear Vehiculo')

@section('content')
	
	
	{!! Form::open(['route' => 'admin.vehiculos.store', 'method' => 'POST']) !!}

	@if(count($errors) > 0)
		<div class="alert alert-danger">
	        <ul>
				@foreach($errors->all() as $error)  

					<li> {{ $error }} </li>
					
          		@endforeach

			</ul>
   		 </div>
	@endif

<br>
                <h2>
                    Crear Vehículo
                </h2>
<br>
					{!! Form::text ('marca',null,['placeholder' => 'Marca del vehículo' , 'required']) !!}
					{!! Form::text ('capacidad',null,['placeholder' => 'Capacidad del vehículo' , 'required']) !!}
					{!! Form::text ('color',null,['placeholder' => 'Color del vehículo' , 'required']) !!}
					{!! Form::text ('modelo',null,['placeholder' => 'Modelo del vehículo' , 'required']) !!}
					{!! Form::text ('placa',null,['placeholder' => 'Placa del vehículo' , 'required']) !!}
					{!! Form::text ('kilometraje',null,['placeholder' => 'Kilometraje' , 'required']) !!}
					{!! Form::text ('tipo',null,['placeholder' => 'Tipo de vehículo' , 'required']) !!}	
					{!! Form::text ('precio_hora',null,['placeholder' => 'Precio' , 'required']) !!}
					{!! Form::label ('Foto:') !!}

					<br>	
					{!! Form::file ('Archivo') !!}
              		{!! Form::submit ('Crear Vehiculo',['class' => 'botonCrear']) !!}
                  

 
	{!! Form::close() !!}

@endsection

