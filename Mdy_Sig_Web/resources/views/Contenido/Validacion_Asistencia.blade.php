@extends('welcome')

@section('contenido')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Solicitud De Validación de Asistencia</h4>
                    <!-- <form class="forms-sample" id="Contenido_CH_Formulario"> -->
                    @csrf
                    <p class="card-description"> </p>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Doc.:</label>
                                <input class="col-md-10 form-control" type="text" id="Contenido_VA_Documento"
                                    name="Contenido_VA_Documento" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha:</label>
                                <input class="col-md-10 form-control" type="date" name="Contenido_VA_Fecha" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input type="button" class="btn btn-success" value="🔎"
                                id="Contenido_VA_Btn_Buscar_Documento">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputConfirmPassword1">Nombre Asesor</label>
                                <input type="text" class="form-control" id="Contenido_VA_Nombre" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputConfirmPassword1">Apellido Paterno</label>
                                <input type="text" class="form-control" id="Contenido_VA_Paterno" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputConfirmPassword1">Apellido Materno</label>
                                <input type="text" class="form-control" id="Contenido_VA_Materno" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputConfirmPassword1">Sub Campaña</label>
                                <input type="text" class="form-control" id="Contenido_VA_SubCampaña" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputConfirmPassword1">Sigla Asistencia</label>
                                <input type="text" class="form-control" id="Contenido_VA_Sigla" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputConfirmPassword1">Descripción de Sigla</label>
                                <input type="text" class="form-control" id="Contenido_VA_Descripcion" disabled>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
                <div class="card-body">
                    <h4 class="card-title">Datos a Modificar</h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="exampleInputConfirmPassword1">Nueva Sigla</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-md-9">
                                <label for="exampleInputConfirmPassword1">Motivo</label>
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection