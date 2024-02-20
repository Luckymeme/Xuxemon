


<?php $__env->startSection('content'); ?>
    <h1>Create Pokémon</h1>
    <form action="<?php echo e(route('pokemons.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select name="type" class="form-control" required>
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($type); ?>"><?php echo e($type); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <select name="size" class="form-control" required>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>
        <div class="form-group">
            <label for="weight">Weight:</label>
            <input type="number" name="weight" step="0.01" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Pokémon</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alejandro\Desktop\pokemon-crud\resources\views/pokemons/create.blade.php ENDPATH**/ ?>