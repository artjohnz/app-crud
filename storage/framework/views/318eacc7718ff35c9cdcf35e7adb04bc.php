

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Applicant List</h2>
    <a href="<?php echo e(route('applicants.create')); ?>" class="btn btn-primary">Add Applicant</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($applicant->name); ?></td>
                <td><?php echo e($applicant->email); ?></td>
                <td><?php echo e($applicant->phone); ?></td>
                <td><?php echo e($applicant->status); ?></td>
                <td>
                    <a href="<?php echo e(route('applicants.edit', $applicant->id)); ?>" class="btn btn-warning">Edit</a>
                    <form action="<?php echo e(route('applicants.destroy', $applicant->id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger" onclick="return confirm('Delete this applicant?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\applicant-management2\resources\views/applicants/index.blade.php ENDPATH**/ ?>