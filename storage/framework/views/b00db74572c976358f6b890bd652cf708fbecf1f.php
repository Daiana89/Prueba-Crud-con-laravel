<?php $__env->startSection('template_title'); ?>
    <?php echo e($empresa->name ?? 'Show Empresa'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('empresas.index')); ?>"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            <?php echo e($empresa->nombres); ?>

                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            <?php echo e($empresa->descripcion); ?>

                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            <?php echo e($empresa->direccion); ?>

                        </div>
    

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_crud\resources\views/empresa/show.blade.php ENDPATH**/ ?>