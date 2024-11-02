

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h2>Create Department</h2>
    <form action="<?php echo e(route('departments.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
       
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="image" name="image" placeholder="https://example.com/image.jpg">
        </div>
        <button type="submit" class="btn btn-primary">Create Department</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Justine Cedric\OneDrive\Desktop\BSIT 3-1 SMS FINAL\BSIT-3-1-SMS\resources\views/departments/create.blade.php ENDPATH**/ ?>