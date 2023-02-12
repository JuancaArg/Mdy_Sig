<!DOCTYPE html>
<html lang="en">
    @include('Reutilizables/Head')
    <body>
    @if (session('status') == 'conectado')        
        <div class="container-scroller">
        @include('Reutilizables/Cabecera')
            <div class="container-fluid page-body-wrapper">
            @include('Reutilizables/Menu')
                    <div class="main-panel">
                    @yield('contenido')
                    </div>
            </div>
        </div>
    @else
        @include('Sesion/Login')
    @endif 
    </body>
    @include('Reutilizables/scripts')
</html>