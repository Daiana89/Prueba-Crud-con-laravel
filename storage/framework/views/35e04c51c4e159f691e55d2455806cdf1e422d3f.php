<?php $__env->startSection('template_title'); ?>
    <?php echo e($user->name ?? 'Show User'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('users.index')); ?>"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($user->nombre); ?>

                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            <?php echo e($user->apellido); ?>

                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            <?php echo e($user->correo); ?>

                        </div>
                        <div class="form-group">
                            <strong>Clave:</strong>
                            <?php echo e($user->clave); ?>

                        </div>
                        <div class="form-group">
                            <strong>Grupo:</strong>
                            <?php echo e($user->grupo); ?>

                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            <?php echo e($user->empresa_id); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_cru\resources\views/user\show.blade.php ENDPATH**/ ?>