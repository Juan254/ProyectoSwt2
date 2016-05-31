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
    <body class="registrarDevolucion">
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
        <div class="contenido">
            <h2>
                Registrar Devolución
            </h2>
            <form method="POST">
                
                <input type="date" name="fecha" >
                <input type="text" placeholder="kilometraje" name="kilometraje" >
                <textarea placeholder="observaciones" name="observaciones" >
                </textarea>
                    
                <button type="submit" class="botonRegistrarDevolucion">Registrar</button>
            </form>
        </div>
    </body>
</html>
