<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pdf Usuarios</title>
    <style>
        #us {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100;
        }
        #us td, #us th{
            border: 1px solid #ddd;
            padding: 8px;

        }
        #us th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align:left;
            background-color: #4CAF50;
            color: #fff;
        }
        
        
    </style>
</head>
<body>
    
    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="us">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Correo</th>
										<th>Clave</th>
										<th>Grupo</th>
										<th>Empresa</th>
                                            

                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            
                                            <td><?php echo e($user->id); ?></td>
											<td><?php echo e($user->nombre); ?></td>
											<td><?php echo e($user->apellido); ?></td>
											<td><?php echo e($user->correo); ?></td>
											<td><?php echo e($user->clave); ?></td>
											<td><?php echo e($user->grupo); ?></td>
											<td><?php echo e($user->empresa_id); ?></td>
                                            

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_cru\resources\views/pdf\export.blade.php ENDPATH**/ ?>