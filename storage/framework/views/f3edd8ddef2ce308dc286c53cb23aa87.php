

<?php $__env->startSection('content'); ?>
<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('register.custom')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                                <?php if($errors->has('name')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Confirm Password" id="password-confirm" class="form-control" name="password_confirmation" required>
                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\projection\resources\views/crud_user/registration.blade.php ENDPATH**/ ?>