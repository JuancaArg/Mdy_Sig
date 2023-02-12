<!DOCTYPE html>
<html lang="en">
    <?php echo $__env->make('Reutilizables/Head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
    <?php if(session('status') == 'conectado'): ?>        
        <div class="container-scroller">
        <?php echo $__env->make('Reutilizables/Cabecera', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="container-fluid page-body-wrapper">
            <?php echo $__env->make('Reutilizables/Menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="main-panel">
                    <?php echo $__env->yieldContent('contenido'); ?>
                    </div>
            </div>
        </div>
    <?php else: ?>
        <?php echo $__env->make('Sesion/Login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?> 
    </body>
    <?php echo $__env->make('Reutilizables/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html><?php /**PATH C:\xampp\htdocs\Mdy_Sig\Mdy_Sig_Web\resources\views/welcome.blade.php ENDPATH**/ ?>