<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Document</title>
	<style>
	.page-break {
	    page-break-after: always;
	    min-width: 20%;
	}
	table {
    border-collapse: collapse;
    width: 100%;
	}
	th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    height: 15px;
    font:caption;
	}
	label, {
	    display: block;
	    height: 20px;
	    padding: 10px;
	    margin-bottom: 10px;
	    width: 100%;
	    font:caption;
	    text-align: justify;
	    width: 100%;
   		text-justify: inter-word;
   		margin-bottom: 20px;
	}
	footer{
		font: caption;
		text-align: center;
		color: whitesmoke;
		background: #171515;
		padding: 5px;
		font-size: 10px;
		width: 100%;
	}
	h1, h2{
		text-align: center;
	}
	h2>label{
		font-size: 35px;
		font:caption;
	}

	</style>
</head>
<body>
	<h2>
	Lista de Rentas
	</h2>
	
	@foreach( $solicitud_renta as $renta )
		<div class="page-break">
			<table>
	   			<tbody>        
                    <tr>
                        <td><strong>{!! Form::label ('ID Número:') !!}</strong></td>
                        <td><strong>{!! Form::label ($renta->id) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Fecha de la renta:') !!}</strong></td>
                        <td><strong>{!! Form::label ( $renta->fecha_renta) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Hora de la renta:') !!}</strong></td>
                        <td><strong>{!! Form::label ($renta->hora_renta) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Licencia de conducción del usuario:') !!}</strong></td>
                        <td><strong>{!! Form::label ($renta->licencia_user) !!}</strong></td>
                    </tr>
                    <tr>
                    	<td><strong>{!! Form::label ( 'Estado de la renta:' ) !!}</strong></td>
                    @if($renta->estado == 0)
						<td><strong>{!! Form::label ( 'NO pagado' ) !!}</strong></td>
					@else
						<td><strong>{!! Form::label ( 'Pagada' ) !!}</strong></td>
					@endif
					</tr>
			   </tbody>
		    </table>

		</div>
	@endforeach

</body>
</html>