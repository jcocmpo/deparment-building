  <!-- Your main layout file -->

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.include.adminnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  <!-- Include the admin navbar -->
    <?php echo $__env->make('components.include.adminsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  <!-- Include the admin sidebar -->

    <div class="container mt-5">
        <div class="row">
            <?php echo $__env->make('components.include.department-cards', ['departments' => $departments], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  <!-- Pass departments to the cards -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Justine Cedric\OneDrive\Desktop\BSIT 3-1 SMS FINAL\BSIT-3-1-SMS\resources\views/pages/department.blade.php ENDPATH**/ ?>