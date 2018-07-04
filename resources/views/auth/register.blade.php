@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nit_entidad" class="col-md-4 col-form-label text-md-right">{{ __('Nit Entidad') }}</label>

                            <div class="col-md-6">
                                <input id="nit_entidad" type="text" class="form-control{{ $errors->has('nit_entidad') ? ' is-invalid' : '' }}" name="nit_entidad" value="{{ old('nit_entidad') }}" required autofocus>

                                @if ($errors->has('nit_entidad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nit_entidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="razon_social" class="col-md-4 col-form-label text-md-right">{{ __('Razon Social') }}</label>

                            <div class="col-md-6">
                                <input id="razon_social" type="text" class="form-control{{ $errors->has('razon_social') ? ' is-invalid' : '' }}" name="razon_social" value="{{ old('razon_social') }}" required autofocus>

                                @if ($errors->has('razon_social'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('razon_social') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" required autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}" required autofocus>

                                @if ($errors->has('celular'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="resolucion_licencia" class="col-md-4 col-form-label text-md-right">{{ __('Resolucion Licencia') }}</label>

                         <div class="col-md-6">
                                <input id="resolucion_licencia" type="text" class="form-control{{ $errors->has('resolucion_licencia') ? ' is-invalid' : '' }}" name="resolucion_licencia" value="{{ old('resolucion_licencia') }}" required autofocus>

                                @if ($errors->has('resolucion_licencia'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('resolucion_licencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_resolucion" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Resolucion') }}</label>

                            <div class="col-md-6">
                                <div class='input-group date' id='datetimepicker1'>
                                <input id="fecha_resolucion" type="text" class="form-control{{ $errors->has('fecha_resolucion') ? ' is-invalid' : '' }}" name="fecha_resolucion" value="{{ old('fecha_resolucion') }}" required autofocus>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                </div>
                            </div>
                                @if ($errors->has('fecha_resolucion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_resolucion') }}</strong>
                                    </span>
                                @endif
                            </div>
                       

                        <div class="form-group row">
                            <label for="fecha_notificacion" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Notificacion') }}</label>

                            <div class="col-md-6">
                                <div class='input-group date' id='datetimepicker2'>
                                <input id="fecha_notificacion" type="text" class="form-control{{ $errors->has('fecha_notificacion') ? ' is-invalid' : '' }}" name="fecha_notificacion" value="{{ old('fecha_notificacion') }}" required autofocus>
                                <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                </div>

                                @if ($errors->has('fecha_notificacion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_notificacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="anios_licencia" class="col-md-4 col-form-label text-md-right">{{ __('Años Licencia') }}</label>

                            <div class="col-md-6">
                                <select id="anios_licencia" type="text" class="form-control{{ $errors->has('anios_licencia') ? ' is-invalid' : '' }}" name="anios_licencia" value="{{ old('anios_licencia') }}" required autofocus>

                                <option value="0" selected>Elija una Opcion...</option>
                                <option value="1" >1</option>
                                <option value="2" >2</option>
                                <option value="3" >3</option>
                                <option value="4" >4</option>
                                <option value="5" >5</option>
                            
                                </select>
                                @if ($errors->has('anios_licencia'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('anios_licencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_vencimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Vencimiento') }}</label>

                            <div class="col-md-6">
                                <div class='input-group date' id='datetimepicker3'>
                                <input id="fecha_vencimiento" type="text" class="form-control{{ $errors->has('fecha_vencimiento') ? ' is-invalid' : '' }}" name="fecha_vencimiento" value="{{ old('fecha_vencimiento') }}" required autofocus>
                                <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                </div>

                                @if ($errors->has('fecha_vencimiento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_vencimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_tipo_servicio" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de servicio') }}</label>

                            <div class="col-md-6">
                                <select id="id_tipo_servicio" class="form-control{{ $errors->has('id_tipo_servicio') ? ' is-invalid' : '' }}" name="id_tipo_servicio" value="{{ old('id_tipo_servicio') }}" required autofocus>

                                <option value="0" selected>Elija una Opcion...</option>
                                    @foreach ($datos as $clave => $dato)
                                             <option value="{{ $dato }}">{{ $clave }}</option>
                                    @endforeach                                    
                                </select>    

                                @if ($errors->has('id_tipo_servicio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_tipo_servicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

                           <div class="col-md-6">
                                <select id="id_departamento" class="form-control{{ $errors->has('id_departamento') ? ' is-invalid' : '' }}" name="id_departamento" value="{{ old('id_departamento') }}" required autofocus>

                                <option value="0" selected>Elija una Opcion...</option>
                                    @foreach ($deptos as $clave => $depto)
                                             <option value="{{ $depto }}">{{ $clave }}</option>
                                    @endforeach                                    
                                </select>    

                                @if ($errors->has('id_tipo_servicio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_tipo_servicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_ciudad" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                             <div class="col-md-6">
                                <select id="id_ciudad" class="form-control{{ $errors->has('id_ciudad') ? ' is-invalid' : '' }}" name="id_ciudad" value="{{ old('id_ciudad') }}" required autofocus disabled>

                                <option value="0" selected>Elija una Opcion...</option>
                                    @foreach ($ciudades as $clave => $ciudad)
                                             <option value="{{ $ciudad }}">{{ $clave }}</option>
                                    @endforeach                                    
                                </select>    

                                @if ($errors->has('id_tipo_servicio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_tipo_servicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipo_persona" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Persona') }}</label>

                            <div class="col-md-6">
                                <select id="tipo_persona" type="text" class="form-control{{ $errors->has('tipo_persona') ? ' is-invalid' : '' }}" name="tipo_persona" value="{{ old('tipo_persona') }}" required autofocus>

                                <option value="0" selected>Elija una Opcion...</option>
                                <option value="Juridica" >Juridica</option>
                                <option value="Natural" >Natural</option>
                                                                       
                                </select>  
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Direccion de email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function()
    {        
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#datetimepicker2').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#datetimepicker3').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $('#id_departamento').change(function(){

            // var drop_Ciudad = $('#id_ciudad option');
            // $.each(drop_Ciudad,function(a,item){
            //     this.remove();
            // });

            $.get('/test/' + this.value,
                function(data){
                    $('#id_ciudad').removeAttr('disabled');
                    $('#id_ciudad').html("");
                for (var i = 0; i < data.length; i++) {
                    $("#id_ciudad").append('<option value="'+data[i].id_ciudad+'">'+data[i].nombre+'</option>');

                }
            });
        });
    });
</script>
@endsection
