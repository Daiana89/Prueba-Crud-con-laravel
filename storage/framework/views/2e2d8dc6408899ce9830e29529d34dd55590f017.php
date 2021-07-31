<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('nombre')); ?>

            <?php echo e(Form::text('nombre','', ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('apellido')); ?>

            <?php echo e(Form::text('apellido','', ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido'])); ?>

            <?php echo $errors->first('apellido', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('correo')); ?>

            <?php echo e(Form::text('correo', '', ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo'])); ?>

            <?php echo $errors->first('correo', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('clave')); ?>

            <?php echo e(Form::text('clave','', ['class' => 'form-control' . ($errors->has('clave') ? ' is-invalid' : ''), 'placeholder' => 'Clave'])); ?>

            <?php echo $errors->first('clave', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('grupo')); ?>

            <?php echo e(Form::text('grupo','', ['class' => 'form-control' . ($errors->has('grupo') ? ' is-invalid' : ''), 'placeholder' => 'Grupo'])); ?>

            <?php echo $errors->first('grupo', '<div class="invalid-feedback">:message</p>'); ?>

            <select name="grupo" id="grupo_id">
                <option value="grupo a"> Grupo A</option>
                <option value="grupo b"> Grupo B</option>
                <option value="grupo c"> Grupo C</option>
            </select>
        </div>
        <div class="form-group">
            <?php echo e(Form::label('empresa')); ?>

            <?php echo e(Form::text('empresa_id','', ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresa'])); ?>

            <?php echo $errors->first('empresa_id', '<div class="invalid-feedback">:message</p>'); ?>

         
            <select name="" id="">
                <?php $__currentLoopData = $lista_empresa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($empresa->id); ?>"><?php echo e($empresa->nombres); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel_crud\resources\views/user/form.blade.php ENDPATH**/ ?>