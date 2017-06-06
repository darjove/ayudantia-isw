<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="{{asset('estilos/estilos.css')}}">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Laravel</title>


    </head>
    <body>
		<nav>
                <ul>
                	<li><a href="{{url('listarSucursales')}}">Sucursales </a></li>
                	<li><a href="">Catalogos </a></li>
                	<li><a href="">Clientes </a></li>
                </ul>

        </nav>  
        @yield('contenido')
    </body>


</html>
