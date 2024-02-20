


<?php $__env->startSection('content'); ?>
    <h1>Pokémon List</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Size</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pokemons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pokemon->id); ?></td>
                    <td><?php echo e($pokemon->name); ?></td>
                    <td><?php echo e($pokemon->type); ?></td>
                    <td><?php echo e($pokemon->size); ?></td>
                    <td><?php echo e($pokemon->weight); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Volver al Login</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alejandro\Desktop\pokemon-crud\resources\views/pokemons/veer.blade.php ENDPATH**/ ?>