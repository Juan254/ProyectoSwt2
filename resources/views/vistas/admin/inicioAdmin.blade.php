<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <title> @yield('titulo') | SWT2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css')}}">
    </head>
    <body class="inicioAdmin">
        <header>
            <div class="bienvenida">
                <h1>Bienvenido</h1>
            </div>
            <div class="datosUsuario">
                <div class="foto">
                    <img >
                </div>
                <div class="nombreAdmin">
                       <p>

                       </p> 
                </div>
            </div>

        </header>
        <div>
            <nav>
                <ul>
                    <li><a href="{{ route('admin.rentas.index' ) }}"> Gestionar Rentas</a></li>
                    <li class="gestionarCarros"><a>Gestionar Carros</a>
                        <div class="contenidoGestionarCarros">
                            <a href="{{ route('admin.vehiculos.create' )}}">
                               Agregar Vehículos
                            </a>
                            <a href="{{ route('admin.vehiculos.index') }}">    
                               Ver Listado de vehículos
                            </a>
                            
                        </div>
                    </li>

                    <li><a href="{{ route('admin.pdf.reporte') }}"> 
                        Generar Reportes </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.index') }}" >
                                Ver Listado de usuarios
                        </a>
                    </li>
                        <li>
                        <a href="{{ route('vistas.admin.auth.logout') }}" >
                                Cerrar sesión
                        </a>
                    </li>

                </ul>
            </nav>
           
                <div class="home">
                     <div class="contenido" style="">
                     
                            @include('flash::message')

                            @yield('content')
                    </div>
                </div>
                 

            
        </div>
    </body>
</html>
