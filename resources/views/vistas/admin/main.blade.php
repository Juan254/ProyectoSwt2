<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> @yield('titulo') | SWT2 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css')}}">
    </head>
    <body class="home">
        <header>
            <h1>Sistema de gestion de renta de vehiculos</h1>
        </header>
        <div class="contenido">
            
            @yield('content')
            
        </div>
    </body>
</html>
