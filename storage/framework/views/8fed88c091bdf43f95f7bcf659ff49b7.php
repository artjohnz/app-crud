

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Applicant</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('applicants.update', $applicant->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($applicant->name); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" value="<?php echo e($applicant->email); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone:</label>
            <input type="text" name="phone" class="form-control" value="<?php echo e($applicant->phone); ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status:</label>
            <select name="status" class="form-control">
                <option <?php echo e($applicant->status == 'Unviewed' ? 'selected' : ''); ?>>Unviewed</option>
                <option <?php echo e($applicant->status == 'Interviewed' ? 'selected' : ''); ?>>Interviewed</option>
                <option <?php echo e($applicant->status == 'Hired' ? 'selected' : ''); ?>>Hired</option>
                <option <?php echo e($applicant->status == 'Onboarding' ? 'selected' : ''); ?>>Onboarding</option>
                <option <?php echo e($applicant->status == 'Resigned' ? 'selected' : ''); ?>>Resigned</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo e(route('applicants.index')); ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\applicant-management2\resources\views/applicants/edit.blade.php ENDPATH**/ ?>