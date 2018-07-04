@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Agregar archivos</div>
        <div class="panel-body">
          <form method="POST" action="/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
             <div class="col-md-6">
            <input type=hidden"" name="name" value="{{ Auth::user()->id }}" style="display: none;">
                                <select id="id_tipo_archivo" class="form-control{{ $errors->has('id_tipo_archivo') ? ' is-invalid' : '' }}" name="id_tipo_servicio" value="{{ old('id_tipo_archivo') }}" required autofocus>

                                <option value="0" selected>Elija una Opcion...</option>
                                    @foreach ($datos as $clave => $dato)
                                             <option value="{{ $clave }}">{{ $dato }}</option>
                                    @endforeach                                    
                                </select>    

                                @if ($errors->has('id_tipo_servicio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_tipo_archivo') }}</strong>
                                    </span>
                                @endif
                                <input type="hidden" name="input_id_tipo_archivo">
                            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label class="col-md-4 control-label">Nuevo Archivo</label>
              <div class="col-md-6">
                <input type="file" class="form-control" name="file" >

              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </form>
          <br>
          <br>  
        </div>
        <br>
                    <div class="list-group" id=lista>
                        <button type="button" class="list-group-item list-group-item-action active">
                            Lista de Archivos Cargados 
                        </button>
                          @foreach ($archivos as $clave => $archivo)
                          <a type="button" class="list-group-item list-group-item-action" data-id="{{$archivo['id_usuario']}}">
                            {{$archivo['url']}} 
                          </a>
                          @endforeach  
                        </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function()
    {
        var usuario =$('#user').html();
        var lista = $('#lista a');
        $.each(lista, function (a,item){
            if ($(item).data("id") == usuario) {
                item.hidden = false;   
            }else{
                item.hidden = true;  
            }
    })
});



</script> 

@endsection
