<?php $__env->startSection('title', isset($phone) ? 'Edit Phone' : 'Add Phone'); ?>

<?php $__env->startSection('content'); ?>
<h1><?php echo e(isset($phone) ? 'Edit Phone' : 'Add Phone'); ?></h1>

<form action="<?php echo e(isset($phone) ? route('phones.update', $phone->id) : route('phones.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php if(isset($phone)): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>

    <div class="mb-3">
        <label for="brand" class="form-label">Brand</label>
        <input type="text" name="brand" id="brand" class="form-control" value="<?php echo e(old('brand', $phone->brand ?? '')); ?>" required>
    </div>

    <div class="mb-3">
        <label for="model" class="form-label">Model</label>
        <input type="text" name="model" id="model" class="form-control" value="<?php echo e(old('model', $phone->model ?? '')); ?>" required>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" name="price" id="price" class="form-control" value="<?php echo e(old('price', $phone->price ?? '')); ?>" required>
    </div>

    <div class="mb-3">
        <label for="color" class="form-label">Color</label>
        <input type="text" name="color" id="color" class="form-control" value="<?php echo e(old('color', $phone->color ?? '')); ?>" required>
    </div>

    <div class="mb-3">
        <label for="in_stock" class="form-label">In Stock</label>
        <select name="in_stock" id="in_stock" class="form-select" required>
            <option value="1" <?php echo e((isset($phone) && $phone->in_stock) ? 'selected' : ''); ?>>Yes</option>
            <option value="0" <?php echo e((isset($phone) && !$phone->in_stock) ? 'selected' : ''); ?>>No</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success"><?php echo e(isset($phone) ? 'Update' : 'Add'); ?></button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\phoneProject\resources\views/phones/form.blade.php ENDPATH**/ ?>