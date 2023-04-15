@extends('welcome')

@section('contenido')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Exportados</h4>
                        <form class="forms-sample" action="">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <select class="form-control" name="Exportado_ComboBox" id="Exportado_ComboBox">
                                            <option hidden selected>Selecciona una opción</option>
                                            <!--Para que se automatico deben hacer un bucle en jquery debe una tabla ya tengo la lista de descargas-->
                                            <option>Control de Asistencia</option>
                                            <option>Lista de Campañas</option>
                                        </select>
                                    </div>                                                     
                                </div>                                
                            </div>         
                            <center>                   
                            <input type="button" class="btn btn-success" value="Exportar" id="Exportado_Boton" name="Exportado_Boton">
                            </center>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection