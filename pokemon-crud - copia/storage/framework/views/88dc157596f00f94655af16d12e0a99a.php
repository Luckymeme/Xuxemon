


<?php $__env->startSection('content'); ?>
    <h1>Pokémon List</h1>
    <a href="<?php echo e(route('pokemons.create')); ?>" class="btn btn-success">Add Pokémon</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Size</th>
                <th>Weight</th>
                <th>Actions</th>
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
                    <td>
                        <a href="<?php echo e(route('pokemons.edit', $pokemon->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('pokemons.destroy', $pokemon->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\win tools\Digimon-main\pokemon-crud\resources\views/pokemons/index.blade.php ENDPATH**/ ?>