<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Document</title>
	<style>
	body {
	    page-break-after: always;	  
	    padding-bottom: 15px;  
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
	<h1>Sistema de gestión de renta vehicular</h1>
	<h2>
	 	{!! Form::label ( 'Factura N° '.$factura->id ) !!}


	<table>
	   <tbody>
        
        
                    <tr>
                        <td><strong>{!! Form::label ('ID Número:') !!}</strong></td>
                        <td><strong>{!! Form::label ($factura->solicitud_renta_id) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Fecha de la facturación:') !!}</strong></td>
                        <td><strong>{!! Form::label ( $factura->fecha_factura) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Nombre del solicitante:') !!}</strong></td>
                        <td><strong>{!! Form::label ($usuario->nombre.' '.$usuario->apellido) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Licencia de conducción del solicitante:') !!}</strong></td>
                        <td><strong>{!! Form::label ($usuario->numero_licencia) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('Descripción de la factura:') !!}</strong></td>
                        <td><strong>{!! Form::label ($factura->descripcion) !!}</strong></td>
                    </tr>
                    <tr>
                        <td><strong>{!! Form::label ('TOTAL a pagar:') !!}</strong></td>
                        <td><strong>{!! Form::label ($factura->valor_total) !!}</strong></td>
                    </tr>
	   </tbody>
    </table>
	<footer>
		Presentado por: <br>
		Juan Esteban Quintero <br>
		Juan David Vasquez Rojas <br>
		Erick Vargas <br>
		Mauricio collazos <br>
		Gonzalo Andrés Salazar López <br>
	</footer>
</body>
</html>