


<?php $__env->startSection('content'); ?>
    <h1>Edit Pokémon</h1>
    <form action="<?php echo e(route('pokemons.update', $pokemon->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($pokemon->name); ?>" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select name="type" class="form-control" required>
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($type); ?>"<?php echo e($pokemon->type == $type ? ' selected' : ''); ?>><?php echo e($type); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <select name="size" class="form-control" required>
                <option value="small"<?php echo e($pokemon->size == 'small' ? ' selected' : ''); ?>>Small</option>
                <option value="medium"<?php echo e($pokemon->size == 'medium' ? ' selected' : ''); ?>>Medium</option>
                <option value="large"<?php echo e($pokemon->size == 'large' ? ' selected' : ''); ?>>Large</option>
            </select>
        </div>
        <div class="form-group">
            <label for="weight">Weight:</label>
            <input type="number" name="weight" step="0.01" class="form-control" value="<?php echo e($pokemon->weight); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Pokémon</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alejandro\Desktop\pokemon-crud\resources\views/pokemons/edit.blade.php ENDPATH**/ ?>