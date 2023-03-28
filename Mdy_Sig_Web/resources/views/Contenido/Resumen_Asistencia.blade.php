@extends('welcome')

@section('contenido')

<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Resumen de Asistencia</h4>
          <p class="card-description">
          </p>

          <div class="row">
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Inicio :</label>
                <input class="col-md-10 form-control" type="date" id = "fecini_Res_Asistencia" name="fecini_Res_Asistencia" >
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Fin:</label>
                <input class="col-md-10 form-control" type="date" id = "fecfin_Res_Asistencia" name="fecfin_Res_Asistencia">
              </div>
            </div>
            <div class="col-md-2">
              <input type="button" class="form-control btn btn-success " value="🔎" id="Btn_Buscar_Res_Asistencia">
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover" id="Tabla_Asistencia" align="center">
              <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Horario</th>
                  <th>Descansos</th>
                  <th>Sigla</th>
                  <th>Descripción Sigla</th>
                  <th>Ingreso</th>
                  <th>Tardanza</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection