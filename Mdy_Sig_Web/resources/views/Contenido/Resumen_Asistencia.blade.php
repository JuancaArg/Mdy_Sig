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
                  <div class="table-responsive"> 
                    <div class="form-group row">
                    <div class="col-sm-5">  
                      <label class="col-form-label">Inicio:</label>
                        <input class="form-control" placeholder="dd/mm/yyyy">
                    </div>
                    <div class="col-sm-5">
                        <label class="col-form-label">Fin:</label>
                        <input class="form-control" placeholder="dd/mm/yyyy">                    
                    </div>
                        <input type="button" class="btn btn-success" value="🔎" id="Cambio_Descanso_Btn_Busca_Documento">
                    </div>
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