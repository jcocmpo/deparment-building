

<?php $__env->startSection('content'); ?>
    <h1>Edit Department</h1>
    <form action="<?php echo e(route('departments.update', $department->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" value="<?php echo e($department->name); ?>" placeholder="Name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="image" id="image" value="<?php echo e($department->image); ?>" placeholder="Image URL">
                <label for="image">Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="description" id="description" value="<?php echo e($department->description); ?>" placeholder="Description">
                <label for="description">Description</label>
            </div>
            <button type="submit" class="btn btn-primary">Update Department</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Justine Cedric\OneDrive\Desktop\BSIT 3-1 SMS FINAL\BSIT-3-1-SMS\resources\views/departments/update.blade.php ENDPATH**/ ?>