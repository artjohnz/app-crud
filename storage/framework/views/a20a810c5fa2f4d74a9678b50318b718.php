

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Add Applicant</h2>
    <form action="<?php echo e(route('applicants.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status:</label>
            <select name="status" class="form-control">
                <option>Unviewed</option>
                <option>Interviewed</option>
                <option>Hired</option>
                <option>Onboarding</option>
                <option>Resigned</option>
            </select>
        </div>
        <button class="btn btn-success">Save</button>
    </form>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\applicant-management2\resources\views/applicants/create.blade.php ENDPATH**/ ?>