<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('nombres')); ?>

            <?php echo e(Form::text('nombres', $empresa->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres'])); ?>

            <?php echo $errors->first('nombres', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('descripcion')); ?>

            <?php echo e(Form::text('descripcion', $empresa->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion'])); ?>

            <?php echo $errors->first('descripcion', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('direccion')); ?>

            <?php echo e(Form::text('direccion', $empresa->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion'])); ?>

            <?php echo $errors->first('direccion', '<div class="invalid-feedback">:message</p>'); ?>

     
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel_cru\resources\views/empresa/form.blade.php ENDPATH**/ ?>