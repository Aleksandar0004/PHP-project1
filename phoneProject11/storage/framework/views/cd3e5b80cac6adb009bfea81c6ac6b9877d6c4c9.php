<?php $__env->startSection('title', 'Phone List'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Phones</h1>
    <a href="<?php echo e(route('phones.create')); ?>" class="btn btn-primary">Add New Phone</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Price</th>
            <th>Color</th>
            <th>In Stock</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($phone->id); ?></td>
            <td><?php echo e($phone->brand); ?></td>
            <td><?php echo e($phone->model); ?></td>
            <td>$<?php echo e(number_format($phone->price, 2)); ?></td>
            <td><?php echo e($phone->color); ?></td>
            <td><?php echo e($phone->in_stock ? 'Yes' : 'No'); ?></td>
            <td>
                <a href="<?php echo e(route('phones.edit', $phone->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                <form action="<?php echo e(route('phones.destroy', $phone->id)); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\OneDrive\Документи\згз\phoneProject11\resources\views/phones/index.blade.php ENDPATH**/ ?>