@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cargar archivos</div>
                   <div class="card-body">
                    <form method="POST" action="/sarlaf/create"  accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group row">
                              <input type=hidden"" name="name" value="{{ Auth::user()->id }}" style="display: none;">
                            <label for="id_tipo_servicio" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de archivo') }}</label>

                            <div class="col-md-6">
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
                            <br>
                            <br>
                            <div class="col-md-6 offset-md-4">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                      <input type="file" class="form-control-file" name="file">
                   </div>
                               <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Subir archivos') }}
                                  </button>
                              </div>
                        </div>
                            </div>
                        </div>
                        </div>
                     </form>
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
