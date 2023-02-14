@extends('welcome')

@section('contenido')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Solicitud de Cambio de Horario</h4>
                    <form class="forms-sample" id="Contenido_CH_Formulario">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Documento Personal</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control"  id="Contenido_CH_Documento" name="Contenido_CH_Documento">
                                </div>
                                <div class="col-md-1">
                                    <input type="button" class="btn btn-success" value="🔎"
                                        id="Contenido_CH_Btn_Buscar_Documento">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="exampleInputConfirmPassword1">Nombre Asesor</label>
                                    <input type="text" class="form-control" id="Contenido_CH_Nombre" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputConfirmPassword1">Condicion Laboral</label>
                                    <input type="text" class="form-control" id="Contenido_CH_Condicion" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputConfirmPassword1">Campaña</label>
                                    <input type="text" class="form-control" id="Contenido_CH_Campaña" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="exampleInputConfirmPassword1">Sub Campaña</label>
                                    <input type="text" class="form-control" id="Contenido_CH_SubCampaña" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputConfirmPassword1">Jefe Inmediato 1</label>
                                    <input type="text" class="form-control" id="Contenido_CH_Jefe1" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputConfirmPassword1">Jefe Inmediato 2</label>
                                    <input type="text" class="form-control" id="Contenido_CH_Jefe2" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tipo de Cambio</label>
                            <select class="form-control" name="Contenido_CH_Tipo_Cambio" id="Contenido_CH_Tipo_Cambio">
                                <option hidden selected>Selecciona una opción</option>
                                <option>Permanente</option>
                                <option>Temporal</option>
                            </select>
                        </div>
                        <div class=" form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Fecha de Inicio</label>
                                    <input type="date" class="form-control" name="Contenido_CH_Fecha_Inicio">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Fecha de Fin</label>
                                    <input type="date" class="form-control" name="Contenido_CH_Fecha_Fin" id="Contenido_CH_Fecha_Fin">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputConfirmPassword1">Motivo</label>
                                    <select class="form-control" id="Contenido_CH_Motivo" name="Contenido_CH_Motivo">
                                        <option hidden selected>Selecciona una opción</option>
                                        <option>Opcion 1</option>
                                        <option>Opcion 1</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputConfirmPassword1">Observaciones</label>
                                    <input type="text" class="form-control" id="Contenido_CH_Observacion" name="Contenido_CH_Observacion">
                                </div>
                            </div>
                        </div>
                        <p class="card-description">Horarios</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Lunes</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Lunes_Entrada" id="Contenido_CH_Lunes_Entrada">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Lunes_Salida" id="Contenido_CH_Lunes_Salida">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Martes</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Martes_Entrada" id="Contenido_CH_Martes_Entrada">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Martes_Salida" id="Contenido_CH_Martes_Salida">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Miercoles</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Miercoles_Entrada" id="Contenido_CH_Miercoles_Entrada">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Miercoles_Salida" id="Contenido_CH_Miercoles_Salida">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jueves</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Jueves_Entrada" id="Contenido_CH_Jueves_Entrada">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Jueves_Salida" id="Contenido_CH_Jueves_Salida">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Viernes</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Viernes_Entrada" id="Contenido_CH_Viernes_Entrada">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Viernes_Salida" id="Contenido_CH_Viernes_Salida">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sabado</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Sabado_Entrada" id="Contenido_CH_Sabado_Entrada">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Sabado_Salida" id="Contenido_CH_Sabado_Salida">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Domingo</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Domingo_Entrada" id="Contenido_CH_Domingo_Entrada">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Domingo_Salida" id="Contenido_CH_Domingo_Salida">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" value="Registrar" id="btn-sol-cambio-horario" class="btn btn-success mr-2">
                        <button href="#" class="btn btn-light">Borrar Formulario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection