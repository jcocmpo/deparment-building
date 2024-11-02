<style>
.card-container {
    height: 900px;
    overflow-y: auto;
}

.card {
    border: none;
    border-radius: 10px;
    margin-bottom: 20px;
    position: relative;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s;
}

.card:hover {
    transform: scale(1.03);
}

.card-img-wrapper {
    overflow: hidden;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    position: relative;
}

.card-img {
    height: 200px;
    width: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.card-img-wrapper:hover .card-img {
    transform: scale(1.05);
}

.card-body {
    position: absolute; /* Set to absolute to overlay on the image */
    bottom: 0; /* Align to the bottom of the image */
    left: 0;
    right: 0;
    padding: 10px;
    color: #ffffff; /* Text color for visibility */
}

.card-department {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 5px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
}

.card-title {
    font-size: 2rem;
    font-weight: 800;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    margin: 0;
}

.card-text {
    font-size: 1.2rem;
    line-height: 1.4;
    font-style: italic;
    margin-top: 5px;
}

.button-container {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 10px;
}

.btn-action {
    padding: 6px 10px;
    font-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    border: 1px solid transparent;
}

.btn-edit {
    background-color: #ffc107;
    color: #ffffff;
}

.btn-delete {
    background-color: #dc3545;
    color: #ffffff;
}

.btn-action:hover {
    opacity: 0.9;
}
</style>

<div class="container mt-5 card-container">
    <div class="row justify-content-center">
        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-img-wrapper">
                        <img src="<?php echo e($department->image); ?>" class="card-img" alt="<?php echo e($department->name); ?>">
                        <div class="card-body"> <!-- Move card-body here to overlay -->
                            <h5 class="card-title"><?php echo e($department->name); ?></h5>
                            <p class="card-text"><?php echo e($department->description); ?></p>
                        </div>
                    </div>
                    <div class="button-container">
                        <a href="<?php echo e(route('departments.edit', $department->id)); ?>" class="btn-action btn-edit">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="<?php echo e(route('departments.destroy', $department->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn-action btn-delete" onclick="event.stopPropagation();">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\Justine Cedric\OneDrive\Desktop\BSIT 3-1 SMS FINAL\BSIT-3-1-SMS\resources\views/components/include/department-cards.blade.php ENDPATH**/ ?>