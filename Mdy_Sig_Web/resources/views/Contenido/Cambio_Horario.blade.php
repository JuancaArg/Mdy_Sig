@extends('welcome')

@section('contenido')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Solicitud de Cambio de Horario</h4>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Documento Personal</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="Cambio_Descanso_Documento">
                                </div>
                                <div class="col-md-1">
                                    <input type="button" class="btn btn-success" value="🔎" id="Cambio_Descanso_Btn_Busca_Documento">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="exampleInputConfirmPassword1">Nombre Asesor</label>
                                    <input type="text" class="form-control" id="Cambio_Descanso_Nombre_Asesor" disabled>

                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputConfirmPassword1">Campaña</label>
                                    <input type="text" class="form-control" id="Cambio_Descanso_Campaña_Asesor" disabled>

                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputConfirmPassword1">Condicion Laboral</label>
                                    <input type="text" class="form-control" id="Cambio_Descanso_Condicion_Asesor" disabled>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tipo de Cambio</label>
                            <select class="form-control">
                                <option hidden selected>Selecciona una opción</option>
                                <option>Permanente</option>
                                <option>Temporal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Fecha de Inicio</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Fecha de Fin</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="exampleInputConfirmPassword1">Hora Ingreso</label>
                                    <select class="form-control">
                                        <option hidden selected>Selecciona una opción</option>
                                        <option>00:00</option>
                                        <option>00:30</option>
                                        <option>01:00</option>
                                        <option>01:30</option>
                                        <option>02:00</option>
                                        <option>02:30</option>
                                        <option>03:00</option>
                                        <option>03:30</option>
                                        <option>04:00</option>
                                        <option>04:30</option>
                                        <option>05:00</option>
                                        <option>05:30</option>
                                        <option>06:00</option>
                                        <option>06:30</option>
                                        <option>07:00</option>
                                        <option>07:30</option>
                                        <option>08:00</option>
                                        <option>08:30</option>
                                        <option>09:00</option>
                                        <option>09:30</option>
                                        <option>10:00</option>
                                        <option>10:30</option>
                                        <option>11:00</option>
                                        <option>11:30</option>
                                        <option>12:00</option>
                                        <option>12:30</option>
                                        <option>13:00</option>
                                        <option>13:30</option>
                                        <option>14:00</option>
                                        <option>14:30</option>
                                        <option>15:00</option>
                                        <option>15:30</option>     
                                        <option>16:00</option>
                                        <option>16:30</option>
                                        <option>17:00</option>
                                        <option>17:30</option>
                                        <option>18:00</option>
                                        <option>18:30</option>
                                        <option>19:00</option>
                                        <option>19:30</option>
                                        <option>20:00</option>
                                        <option>20:30</option>
                                        <option>21:00</option>
                                        <option>21:30</option>
                                        <option>22:00</option>
                                        <option>22:30</option>
                                        <option>23:00</option>
                                        <option>23:30</option>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputConfirmPassword1">Hora Salida</label>
                                    <select class="form-control">
                                        <option hidden selected>Selecciona una opción</option>
                                        <option>00:00</option>
                                        <option>00:30</option>
                                        <option>01:00</option>
                                        <option>01:30</option>
                                        <option>02:00</option>
                                        <option>02:30</option>
                                        <option>03:00</option>
                                        <option>03:30</option>
                                        <option>04:00</option>
                                        <option>04:30</option>
                                        <option>05:00</option>
                                        <option>05:30</option>
                                        <option>06:00</option>
                                        <option>06:30</option>
                                        <option>07:00</option>
                                        <option>07:30</option>
                                        <option>08:00</option>
                                        <option>08:30</option>
                                        <option>09:00</option>
                                        <option>09:30</option>
                                        <option>10:00</option>
                                        <option>10:30</option>
                                        <option>11:00</option>
                                        <option>11:30</option>
                                        <option>12:00</option>
                                        <option>12:30</option>
                                        <option>13:00</option>
                                        <option>13:30</option>
                                        <option>14:00</option>
                                        <option>14:30</option>
                                        <option>15:00</option>
                                        <option>15:30</option>     
                                        <option>16:00</option>
                                        <option>16:30</option>
                                        <option>17:00</option>
                                        <option>17:30</option>
                                        <option>18:00</option>
                                        <option>18:30</option>
                                        <option>19:00</option>
                                        <option>19:30</option>
                                        <option>20:00</option>
                                        <option>20:30</option>
                                        <option>21:00</option>
                                        <option>21:30</option>
                                        <option>22:00</option>
                                        <option>22:30</option>
                                        <option>23:00</option>
                                        <option>23:30</option>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputConfirmPassword1">Motivo</label>
                                    <select class="form-control">
                                        <option hidden selected>Selecciona una opción</option>
                                        <option>Opcion 1</option>
                                        <option>Opcion 1</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputConfirmPassword1">Observaciones</label>
                                    <select class="form-control">
                                        <option hidden selected>Selecciona una opción</option>
                                        <option>Opcion 1</option>
                                        <option>Opcion 1</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <input type="button" value="Registrar" class="btn btn-success mr-2">
                        <button href="#" class="btn btn-light">Borrar Formulario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection