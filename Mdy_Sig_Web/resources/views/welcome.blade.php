<!DOCTYPE html>
<html lang="en">
    @include('Reutilizables/Head')
    <body>
    @if (empty($_SESSION["status"]))
        @include('Sesion/Login')
    @elseif ($_SESSION["status"] == 'conectado')
        @include('Contenido/Resumen_Asistencia')
    @else
    @include('Sesion/Login')
    @endif 
    </body>
    @include('Reutilizables/scripts')
</html>