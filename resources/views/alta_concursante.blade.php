@extends('dashboard')

@section('title', 'Alta Concursante')

@section('content')

  <script type="text/javascript">
    $('#item-alta-concursante').addClass('active');
    $('#item-alta-concursante').click(function(e) {
      e.preventDefault();
    });
    $('#submenu-concursante').addClass('in');
  </script>

	<div class="container-fluid">

      <div class="page-header">
        <h1>Alta Concursante</h1>      
      </div>

      <div class="row">
          <form class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-sm-2" for="id">Hoja de Registro:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="id" placeholder="Hoja de Registro">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Nombre:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="correo">Correo:</label>
                <div class="col-sm-6">          
                  <input type="text" class="form-control" id="correo" placeholder="Correo">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="grupo">Grupo:</label>
                <div class="col-sm-6">          
                  <input type="text" class="form-control" id="grupo">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="division">División</label>
                <div class="col-sm-6">
                  <select class="form-control" id="division">
                    <option value="a">Avanzado</option>
                    <option value="p">Principiante</option>
                  </select>
                </div>
              </div>
              <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button id="registrar" class="btn btn-default">Registrar</button>
                </div>
              </div>
          </form>

      </div>
  </div>

@stop
