<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css')}}">
    </head>
    <body class="listaAutos">
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
                <h2>
                    Lista de Autos
                </h2>
                <table>
                    <thead>
                    <th>Nombre</th>
                    <th>Placa</th>
                    <th>Kilometraje</th>
                    <th>Precio</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tr>
                        <td>auto1</td>
                        <td>ABC123</td>
                        <td>160</td>
                        <td>20000</td>
                        <td><a><img src="{{ asset ('recursos/imagenes/editar.png')}}"></a></td>
                        <td><a><img src="{{ asset ('recursos/imagenes/eliminar.png')}}"></a></td>
                    </tr>
                    <tr>
                        <td>auto2</td>
                        <td>GJT049</td>
                        <td>250</td>
                        <td>25000</td>
                        <td><a><img src="/sgrv/recursos/imagenes/editar.png"></a></td>
                        <td><a><img src="/sgrv/recursos/imagenes/eliminar.png"></a></td>
                    </tr>
                    <tr>
                        <td>auto3</td>
                        <td>LET395</td>
                        <td>960</td>
                        <td>13000</td>
                        <td><a><img src="/sgrv/recursos/imagenes/editar.png"></a></td>
                        <td><a><img src="/sgrv/recursos/imagenes/eliminar.png"></a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div>TODO write content</div>
    </body>
</html>
