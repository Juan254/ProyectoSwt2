<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> @yield('titulo') | SWT2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css')}}">
    </head>
    <body class="crearVehiculo">
        <header>
            <div class="bienvenida">
                <h1>Bienvenido</h1>
            </div>
            <div class="datosUsuario">
                <div class="foto">
                    <img >
                </div>
                <div class="nombreAdmin">
                    <p>Nombre Admin</p>
                </div>
            </div>

        </header>
        <div>
            <nav>
                <ul>
                    <li><a href="/sgrv/vistas/inicioAdmin.blade.html">
                            Gestionar Rentas</a>
                    </li>
                    <li class="gestionarCarros"><a>Gestionar Carros</a>
                        <div class="contenidoGestionarCarros">
                            <a href="/sgrv/vistas/crearVehiculo.blade.html">
                                Agregar Carro
                            </a>
                            <a >Ver Listado</a>
                        </div>
                    </li>
                    <li><a>Generar Reportes</a></li>

                </ul>
            </nav>
            <div class="contenido">
               
                @yield('content')
            
            </div>
        </div>
    </body>
</html>
