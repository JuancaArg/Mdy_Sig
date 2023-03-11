@extends('welcome')

@section('contenido')

<style>
    #Contenido_CH_Documento_Autocompletado {
        list-style-type: none;
        padding: 0;
        margin-top: -1px;
        position: absolute;
        z-index: 1;
        width: 100%;
        max-height: 200px;
        overflow-y: auto;
        border: 1px solid #ccc;
        background-color: #fff;
        border-top-right-radius: 4px;
        border-top-left-radius: 4px;
    }

    #Contenido_CH_Documento_Autocompletado li {
        padding: 10px;
        cursor: pointer;
    }

    #Contenido_CH_Documento_Autocompletado li:hover {
        background-color: #f2f2f2;
    }

    #Contenido_CH_Documento_Autocompletado li:active {
        background-color: #e2e2e2;
    }

    #Contenido_CH_Documento_Autocompletado li:first-child {
        margin-top: -1px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    #Contenido_CH_Documento_Autocompletado li:last-child {
        margin-bottom: -1px;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
    }



    #Contenido_CH_Documento_Autocompletado {
        max-width: 400px;
        /*opcional, establece el ancho máximo del autocompletado*/
    }
</style>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Solicitud de Cambio de Horario</h4>
                    <form class="forms-sample" id="Contenido_CH_Formulario">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Documento - Nombres - Apellidos</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control autocomplete" id="Contenido_CH_Documento" name="Contenido_CH_Documento" placeholder="insertar documento o nombres" required>
                                    <ul id="Contenido_CH_Documento_Autocompletado"></ul>
                                </div>
                                <div class="col-md-1">
                                    <input type="button" class="btn btn-success" value="🔎" id="Contenido_CH_Btn_Buscar_Documento">
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
                                    <input type="date" class="form-control" name="Contenido_CH_Fecha_Inicio" id="Contenido_CH_Fecha_Inicio">
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
                                    <label for="exampleInputUsername1">Motivo</label>
                                    <select class="form-control" name="Contenido_CH_Motivo" id="Contenido_CH_Motivo">
                                        <option hidden selected>Selecciona una opción</option>
                                        <option>Reducción de horario por Apoyo</option>
                                        <option>Cambio por Requerimiento</option>
                                        <option>Salud</option>
                                        <option>Estudios</option>
                                        <option>Personales</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputConfirmPassword1">Comentarios</label>
                                    <input type="text" class="form-control" id="Contenido_CH_Comentarios" name="Contenido_CH_Comentarios" required>
                                </div>
                            </div>
                        </div>
                        <p class="card-description">Horarios</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">H. defecto</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Hora_Defecto_Entrada" id="Contenido_CH_Hora_Defecto_Entrada">
                                            <option hidden selected>Hora Ingreso</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="Contenido_CH_Hora_Defecto_Salida" id="Contenido_CH_Hora_Defecto_Salida">
                                            <option hidden selected>Hora Salida</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Break Defecto</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Entrada" id="Contenido_CH_Hora_Break_Entrada">
                                            <option hidden selected>Break inicio</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            <option hidden selected>Hora Salida</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Break Lunes</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Lunes_Entrada" id="Contenido_CH_Hora_Break_Lunes_Entrada">
                                            <option hidden selected>Break inicio</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Lunes_Salida" id="Contenido_CH_Hora_Break_Lunes_Salida">
                                            <option hidden selected>Break fin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Martes -->
                        <div class="row">
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
                                            <option hidden selected>Hora Salida</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Break Martes</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Martes_Entrada" id="Contenido_CH_Hora_Break_Martes_Entrada">
                                            <option hidden selected>Break inicio</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Martes_Salida" id="Contenido_CH_Hora_Break_Martes_Salida">
                                            <option hidden selected>Break fin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Miercoles -->
                        <div class="row">
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
                                            <option hidden selected>Hora Salida</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Break Miercoles</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Miercoles_Entrada" id="Contenido_CH_Hora_Break_Miercoles_Entrada">
                                            <option hidden selected>Break inicio</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Miercoles_Salida" id="Contenido_CH_Hora_Break_Miercoles_Salida">
                                            <option hidden selected>Break fin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Jueves -->
                        <div class="row">
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
                                            <option hidden selected>Hora Salida</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Break Jueves</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Jueves_Entrada" id="Contenido_CH_Hora_Break_Jueves_Entrada">
                                            <option hidden selected>Break inicio</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Jueves_Salida" id="Contenido_CH_Hora_Break_Jueves_Salida">
                                            <option hidden selected>Break fin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Viernes -->
                        <div class="row">
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
                                            <option hidden selected>Hora Salida</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Break Viernes</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Viernes_Entrada" id="Contenido_CH_Hora_Break_Viernes_Entrada">
                                            <option hidden selected>Break inicio</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Viernes_Salida" id="Contenido_CH_Hora_Break_Viernes_Salida">
                                            <option hidden selected>Break fin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sabado -->
                        <div class="row">
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
                                            <option hidden selected>Hora Salida</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Break Sabado</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Sabado_Entrada" id="Contenido_CH_Hora_Break_Sabado_Entrada">
                                            <option hidden selected>Break inicio</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Sabado_Salida" id="Contenido_CH_Hora_Break_Sabado_Salida">
                                            <option hidden selected>Break fin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Domingo -->
                        <div class="row">
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
                                            <option hidden selected>Hora Salida</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Break Domingo</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Domingo_Entrada" id="Contenido_CH_Hora_Break_Domingo_Entrada">
                                            <option hidden selected>Break inicio</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="Contenido_CH_Hora_Break_Domingo_Salida" id="Contenido_CH_Hora_Break_Domingo_Salida">
                                            <option hidden selected>Break fin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" value="Registrar" id="btn-sol-cambio-horario" class="btn btn-success mr-2">
                        <button href="#" class="btn btn-light">Borrar Formulario</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection