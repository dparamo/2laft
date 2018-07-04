<?php $__env->startSection('content'); ?>
<div class="container">

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Agregar archivos</div>
        <div class="panel-body">
          <form method="POST" action="/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
             <div class="col-md-6">
            <input type=hidden"" name="name" value="<?php echo e(Auth::user()->id); ?>" style="display: none;">
                                <select id="id_tipo_archivo" class="form-control<?php echo e($errors->has('id_tipo_archivo') ? ' is-invalid' : ''); ?>" name="id_tipo_servicio" value="<?php echo e(old('id_tipo_archivo')); ?>" required autofocus>

                                <option value="0" selected>Elija una Opcion...</option>
                                    <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clave => $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($clave); ?>"><?php echo e($dato); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                    
                                </select>    

                                <?php if($errors->has('id_tipo_servicio')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('id_tipo_archivo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <input type="hidden" name="input_id_tipo_archivo">
                            </div>

            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
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
                          <?php $__currentLoopData = $archivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clave => $archivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <a type="button" class="list-group-item list-group-item-action" data-id="<?php echo e($archivo['id_usuario']); ?>">
                            <?php echo e($archivo['url']); ?> 
                          </a>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>